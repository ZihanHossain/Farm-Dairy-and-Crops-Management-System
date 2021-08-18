import React from 'react'
import { useState, useEffect } from 'react';
import { Container, Form, Button } from 'react-bootstrap'
import { useProfileSettingsFetch } from './useProfileSettingsFetch';

const ProfileSettings = () => {
    
    const [name, setName] = useState([]);
    const [username, setUserName] = useState([]);
    const [password, setPassword] = useState([]);
    const [email, setEmail] = useState([]);

    useProfileSettingsFetch('http://127.0.0.1:8000/api/manager/profilesettings', setName, setUserName, setPassword, setEmail);

    const handleNameChange = (e) => {
        setName(e.target.value);
    }

    const handleUserNameChange = (e) => {
        setUserName(e.target.value);
    }

    const handlePasswordChange = (e) => {
        setPassword(e.target.value);
    }

    const handleEmailChange = (e) => {
        setEmail(e.target.value);
    }

    const handleSubmit = (e) => {
        //e.preventDefault();
        const data = {
            name, username, password, email
        }
        const url = `http://127.0.0.1:8000/api/manager/profilesettings/edit`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        })
        .then(response => console.log(response.data));
        console.log(data);
    }

    return (
        <div>
            <Container>
                <Form>
                    <Form.Group className="mb-3" >
                        <Form.Label>Name</Form.Label>
                        <Form.Control type="text" onChange={handleNameChange} placeholder={name} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="email" onChange={handleEmailChange} placeholder={email} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>User Name</Form.Label>
                        <Form.Control type="text" onChange={handleUserNameChange} placeholder={username} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" onChange={handlePasswordChange} placeholder={password} />
                    </Form.Group>

                    <Button onClick={handleSubmit}>
                        Edit
                    </Button>
                </Form>
            </Container>
        </div>
    )
}

export default ProfileSettings;  
