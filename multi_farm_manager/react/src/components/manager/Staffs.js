import React from 'react'
import { Table } from 'react-bootstrap'
import { useState } from 'react';
import { useStaffFetch } from './useStaffFetch';
//import Staff from './Staff';
import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';

function Staffs() {

    const [users, setUsers] = useState([]);

    useStaffFetch('http://127.0.0.1:8000/api/manager/staff', setUsers);

    const handleDelete = (id) =>
    {
        const url = `http://127.0.0.1:8000/api/manager/staff/delete/${id}`;
        fetch(url);
        const data = users.filter((user) => user.u_id != id);
        setUsers(data)
    }

    return (
        <div>
            <h3>Staff Information</h3>
            <Link to={"/manager/staff/add"}><Button>Add</Button></Link>
            <Table striped bordered hover size="sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Farm Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        users.map( user => 
                            // {
                            // return <Staff key={user.id} user={user} handleDeleteCallback={handleDelete}/>
                            // }
                            (
                                <tr>
                                    <td>{user.u_id}</td>
                                    <td>df</td>
                                    <td>{user.name}</td>
                                    <td>{user.type}</td>
                                    <td><Button onClick={() => handleDelete(user.u_id)}>Delete</Button> <Link to={`/manager/staff/edit/${user.u_id}`}><Button>Edit</Button></Link></td>
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
