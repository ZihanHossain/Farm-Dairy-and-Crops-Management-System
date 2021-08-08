import React from 'react'
import { Table } from 'react-bootstrap'
import { useState } from 'react';
import { useStaffFetch } from './useStaffFetch';
//import Staff from './Staff';
import { Button } from 'react-bootstrap';

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
            <Button>Add</Button>
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
                                    <td><img src={require(`../../images/staffprofile/${user.image}`)} alt="error"/></td>
                                    <td>{user.name}</td>
                                    <td>{user.type}</td>
                                    <td><Button onClick={() => handleDelete(user.u_id)}>Delete</Button></td>
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
