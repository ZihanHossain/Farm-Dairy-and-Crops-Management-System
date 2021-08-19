import React from 'react'
import { useVaccinationFetch } from './useVaccinationFetch';
import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { Table } from 'react-bootstrap'
import { useState } from 'react';

const Vaccination = () => {

    const [cows, setCows] = useState([]);

    useVaccinationFetch('http://127.0.0.1:8000/api/manager/vaccination', setCows);

    return (
        <div>
             <h3>Vaccination Information</h3>


            <Table striped bordered hover size="sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        cows.map( cow => 
                            // {
                            // return <Staff key={user.id} user={user} handleDeleteCallback={handleDelete}/>
                            // }
                            (
                                <tr>
                                    <td>{cow.co_id}</td>
                                    <td><img src={process.env.PUBLIC_URL + "/images/cow2.jpg"} width="50px"/></td>
                                    <td>{cow.gender}</td>
                                    <td>{cow.price}</td>
                                    <td>{cow.date_of_birth}</td>
                                    <td><Link to={`/manager/vaccination/check/${cow.co_id}`}><Button>Check</Button></Link></td>
                                </tr>
                            )
                        )
                    }
                </tbody>
            </Table>
        </div>
    )
}

export default Vaccination
