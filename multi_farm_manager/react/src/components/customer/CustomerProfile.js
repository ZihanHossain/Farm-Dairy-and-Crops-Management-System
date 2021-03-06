import React from 'react';
import { useState } from 'react';
import { UseProfileFetch } from './UseProfileFetch';
import { useCookies } from 'react-cookie';
import { Button } from 'react-bootstrap';
import { Link, useHistory } from 'react-router-dom';

function CustomerProfile() {

    const [users, setUsers] = useState([]);
    const [cookies, setCookie, removeCookie] = useCookies(['type']);
    const history = useHistory();

    UseProfileFetch(`http://localhost:8000/api/customer/profile/${cookies.u_id}`, setUsers);

    const handleDelete = (id) =>
    {
        const url = `http://localhost:8000/api/customer/profile/delete/${id}`;
        fetch(url);
        removeCookie('name');
        removeCookie('u_id');
        removeCookie('email');
        removeCookie('type');
        history.push('/login');
    }

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
                            <th>Email Address: </th>
                            <th>Gender: </th>
                            <th>User Type: </th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            
                                
                                    <tr>
                                        <td>{users.name}</td>
                                        <td>{users.u_id}</td>
                                        <td>{users.email}</td>
                                        <td>{users.gender}</td>
                                        <td>{users.type}</td>
                                    </tr>
                                
                            
                        }
                    </tbody>
                </table>
                <Link to={`/customer/profile/edit/${users.u_id}`}><Button>Edit</Button> </Link>
                <Button onClick={() => handleDelete(users.u_id)}>Delete</Button>
           </center>
        </div>
    )
}

export default CustomerProfile;