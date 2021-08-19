import React from 'react'
import { Table } from 'react-bootstrap'
import { useState } from 'react';
import { useStaffFetch } from './useStaffFetch';
//import Staff from './Staff';
import { Button } from 'react-bootstrap';
import { Link, Switch, Route } from 'react-router-dom';
import AddCow from './AddCow';

function Staffs() {

    const [cows, setCows] = useState([]);

    useStaffFetch('http://127.0.0.1:8000/api/manager/cow', setCows);

    const handleDelete = (id) =>
    {
        const url = `http://127.0.0.1:8000/api/manager/cow/delete/${id}`;
        fetch(url);
        const data = cows.filter((cow) => cow.co_id != id);
        setCows(data)
        console.log(cows);
    }

    const addCow = (data) => {
        setCows([...cows, data]);
    }

    return (
        <div>
            <Switch>
                <Route path="/manager/cow/add">
                    <AddCow callback={addCow}/>
                </Route>
            </Switch>
            <h3>Cow's Information</h3>
            <Link to={"/manager/cow/add"}><Button>Add</Button></Link>
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

                                    <td><img src={process.env.PUBLIC_URL + `/images/${cow.image}`} width="50px"/></td>

                                    <td>{cow.gender}</td>
                                    <td>{cow.price}</td>
                                    <td>{cow.date_of_birth}</td>
                                    <td><Button onClick={() => handleDelete(cow.co_id)}>Delete</Button></td>
                                </tr>
                            )
                        )
                    }
                </tbody>
            </Table>
        </div>
    )
}

export default Staffs