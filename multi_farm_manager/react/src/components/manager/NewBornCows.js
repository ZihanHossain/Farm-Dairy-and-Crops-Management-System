import React, { useState } from 'react'
import { useNewBornCowFetch } from './useNewBornCowFetch';
import { Table, Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';

function NewBornCows() {

    const [cows, setCows] = useState([]);

    useNewBornCowFetch('http://127.0.0.1:8000/api/manager/newborn', setCows);

    const handleConfirm = (id) =>
    {
        const url = `http://127.0.0.1:8000/api/manager/newborn/confirm/${id}`;
        fetch(url);
        const data = cows.filter((cow) => cow.co_id != id);
        setCows(data)
    }

    return (
        <div>
            <h3>Cow's Information</h3>
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
                                    <td>df</td>
                                    <td>{cow.gender}</td>
                                    <td>{cow.price}</td>
                                    <td>{cow.date_of_birth}</td>
                                    <td><Button onClick={() => handleConfirm(cow.co_id)}>Confirm</Button></td>
                                    
                                </tr>
                            )
                        )
                    }
                </tbody>
            </Table>
        </div>
    )
}

export default NewBornCows
