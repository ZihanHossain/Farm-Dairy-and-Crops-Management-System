import React from 'react';
import { useState } from 'react';
import { UseProfileFetch } from './UseProfileFetch';
import { useCookies } from 'react-cookie';
import { Button } from 'react-bootstrap';
import { Link, useHistory } from 'react-router-dom';

function CustomerProfileEdit() {

    const [users, setUsers] = useState([]);
    const [cookies, setCookie, removeCookie] = useCookies(['type']);
    const history = useHistory();

    UseProfileFetch(`http://localhost:8000/api/customer/profile/${cookies.u_id}`, setUsers);


    return (
        <div>
            <br/>
            <br/>
           <center><b><h1> Profile Edit </h1></b></center>

           <center>
                <table className="table table-striped" style={{width:'50%'}} border="2px" align="center">
                    <thead>
                        <tr>
                            <th>Name: </th>
                            <th>ID: </th>
                            <th>Email Address: </th>
                            <th>Gender: </th>
                            <th>User Type: </th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            
                                
                                    <tr>
                                        <td><input type='text' value={users.name} /></td>
                                        <td><input type="readOnly" value={users.u_id}/></td>
                                        <td><input type='text' value={users.email} /></td>
                                        <td><input type="text" value={users.gender} /></td>
                                        <td><input type='readOnly' value={users.type} /></td>
                                    </tr>
                                
                            
                        }
                    </tbody>
                </table>
                <Button>Save</Button>
           </center>
        </div>
    )
}

export default CustomerProfileEdit;