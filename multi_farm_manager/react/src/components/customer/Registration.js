import React from 'react';
import { Container, Form, Button, Row, Col, Dropdown } from 'react-bootstrap';
import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

function Registration() {

        const [name, setName] = useState();
        const [username, setUserName] = useState();
        const [email, setEmail] = useState();
        const [password, setPassword] = useState();
        const [type, setType] = useState();

        const handleNameChange = (e) => {
            setName(e.target.value);
        }
    
        const handleUserNameChange = (e) => {
            setUserName(e.target.value);
        }

        const handleEmailChange = (e) => {
            setEmail(e.target.value);
        }
    
        const handlePasswordChange = (e) => {
            setPassword(e.target.value);
        }
    
        const handleTypeChange = (e) => {
            setType(e.target.value);
        }

        const handleSubmit = (e) => {
            //e.preventDefault();
            const data = {
                name, username, password, email, type
            }

            const url = `http://localhost:8000/api/sign_up/form`;
            const axios = require('axios').default;
            axios({
                method: 'post',
                url: url,
                data:data,
            });
            console.log(data);
            <Link to="/login"></Link>
        }
        

    return (
        <div>
            <br/>
            <br/>
           <center><b><h2> Customer Registration </h2></b></center>

           <center>
           <h3>Sign Up Here</h3>
           <span>Create New Account</span>
           <Container>
                <Form>
                    <Form.Group className="mb-3" >
                        <Form.Label>Name</Form.Label>
                        <Form.Control type="text" onChange={handleNameChange} placeholder="Enter name" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Username</Form.Label>
                        <Form.Control type="text" onChange={handleUserNameChange} placeholder="Enter username" />
                    </Form.Group>
                    
                    <Form.Group className="mb-3" >
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="email" onChange={handleEmailChange} placeholder="Enter email" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" onChange={handlePasswordChange} placeholder="Password" />
                    </Form.Group>
                    <br />
                    
                    <Button variant="primary" onClick={handleSubmit}>
                        Register
                    </Button>
                </Form>
            </Container>
           </center>
        </div>
    )
}

export default Registration;