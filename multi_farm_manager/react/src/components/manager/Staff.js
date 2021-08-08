import React from 'react'
import { useState } from 'react';
import { Button } from 'react-bootstrap';

function Staff({user, handleDeleteCallback}) {
    if(user != null)
    {
        return (
            <div>
                <tr>
                    <td>{user.u_id}</td>
                    <td><img src={require(`../../images/staffprofile/${user.image}`)} /></td>
                    <td>{user.name}</td>
                    <td>{user.type}</td>
                    <td><Button onClick={() => handleDeleteCallback(user.id)}>Delete</Button></td>
                </tr>
            </div>
        )
    }
    else{
        return (
            <div>
                <tr>
                    No Data To Show
                </tr>
            </div>
        )
    }
   
}

export default Staff
