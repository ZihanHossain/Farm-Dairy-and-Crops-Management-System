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
                {
                    users.map(user=>
                        (
                            <tr>
                                <th>Name: </th>
                                <td>{user.name}</td>
                            </tr>
                        )
                        (   <tr>
                                <th>ID: </th>
                                <td>{user.id}</td>
                            </tr>)
                        (
                            <tr>
                                <th>Username: </th>
                                <td>borshon</td>
                            </tr>
                        )
                        (
                            <tr>
                                <th>Email Address: </th>
                                <td>{user.email}</td>
                            </tr>
                        )
                        (
                            <tr>
                                <th>Gender: </th>
                                <td>{user.gender}</td>
                            </tr>
                        )
                        (
                            <tr>
                                <th>User Type: </th>
                                <td>{user.type}</td>
                            </tr>
                        )
                    )
                }     
                    <br />
                </table>
                <input type='button' name='submit' value='Edit'></input>
                <input type='button' name='submit' value='Delete'></input>
           </center>
        </div>
    )
}

export default CustomerProfile;