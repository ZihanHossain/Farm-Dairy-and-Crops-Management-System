import React from 'react'
import { Table } from 'react-bootstrap'
import { useState } from 'react';
import { UseProfileFetch } from './UseProfileFetch';
//import Staff from './Staff';
import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';

function CustomerProfile() {

    const [users, setUsers] = useState([]);

    UseProfileFetch('http://localhost:8000/api/customer/profile', setUsers);
    return (
        <div>
            <br/>
            <br/>
           <center><b><h1> Profile Page </h1></b></center>

           <center>
                <table className="table table-striped" style={{width:'50%'}} border="2px" align="center">
                    <thead>
                        <tr>
                            <th>Name: </th>
                            <th>ID: </th>
                            <th>Username: </th>
                            <th>Email Address: </th>
                            <th>Gender: </th>
                            <th>User Type: </th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            users.map(user=>
                                (
                                    <tr>
                                        <td>{user.name}</td>
                                        <td>{user.u_id}</td>
                                        <td>borshon</td>
                                        <td>{user.email}</td>
                                        <td>{user.gender}</td>
                                        <td>{user.type}</td>
                                    </tr>
                                )
                            )
                        }
                    </tbody>
                </table>
                <input type='button' name='submit' value='Edit'></input>
                <input type='button' name='submit' value='Delete'></input>
           </center>
        </div>
    )
}

export default CustomerProfile;