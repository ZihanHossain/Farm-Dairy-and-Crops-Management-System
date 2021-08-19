import React from 'react'
import { Table } from 'react-bootstrap'
import { useState } from 'react';
import { useMilkCollectionFetch } from './useMilkCollectionFetch';
//import Staff from './Staff';
import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';

function MilkCollection() {

    const [cows, setCows] = useState([]);
    const [todaymilkingamount, setTodayMilkingAmount] = useState([]);
    const [totalmilkingamount, setTotalMilkingAmount] = useState([]);

    useMilkCollectionFetch('http://127.0.0.1:8000/api/manager/milkcollection', setCows, setTodayMilkingAmount, setTotalMilkingAmount);

    // const handleCheck = (id) =>
    // {
    //     const url = `http://127.0.0.1:8000/api/manager/cow/delete/${id}`;
    //     fetch(url);
    //     const data = cows.filter((cow) => cow.co_id != id);
    //     setCows(data)
    //     console.log(cows);
    // }

    return (
        <div>
            <h3>Milk Collection</h3>
            <Link to={"/manager/cow/add"}><Button>Add</Button></Link>
            <Table striped bordered hover size="sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Today's Amount</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        cows.map( (cow, i) => 
                            // {
                            // return <Staff key={user.id} user={user} handleDeleteCallback={handleDelete}/>
                            // }
                            (
                                <tr>
                                    <td>{cow.co_id}</td>
                                    <td>df</td>
                                    <td>{cow.gender}</td>
                                    <td>{todaymilkingamount[i]}</td>
                                    <td>{totalmilkingamount[i]}</td>
                                    <td><Link to={`/manager/milkcollection/cowdetails/${cow.co_id}`}><Button>Check</Button></Link></td>
                                </tr>
                            )
                        )
                    }
                </tbody>
            </Table>
        </div>
    )
}

export default MilkCollection
