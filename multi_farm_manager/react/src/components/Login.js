import React from 'react'
import { useState } from 'react'
import { Link, useHistory } from 'react-router-dom';
import { googleProvider } from "../config/authMethord";
import socialMediaAuth from '../service/auth';
import { useCookies } from 'react-cookie';
import { Button, Form, Alert } from 'react-bootstrap';

function Login() {

    // const [user, setUser] = useState([]);
    const [username, setUserName] = useState([]);
    const [password, setPassword] = useState([]);
    const [message, setMessage] = useState('');
    const [cookies, setCookie] = useCookies(['type']);

    const history = useHistory();

    const handleUserNameChange = (e) => {
        setUserName(e.target.value);
    }

    const handlePasswordChange = (e) => {
        setPassword(e.target.value);
    }

    const handleGoogleLogin = async(provider) => {
        const res = await socialMediaAuth(provider);
        console.log(res.displayName);
        console.log(res.email);
        const data = {
            'name': res.displayName, 'email': res.email
        }
        console.log(data);
        const url = `http://127.0.0.1:8000/api/login/google`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        }).then(response => {
            setCookie('name', response.data.name, { path: '/' });
            setCookie('email', response.data.email, { path: '/' });
            setCookie('u_id', response.data.u_id, { path: '/' });
            setCookie('type', response.data.type, { path: '/' });
            console.log(cookies.email);
            console.log(cookies.name);
            console.log(cookies.u_id);
            console.log(cookies.type);
            console.log(response.data);
            if(response.data.type == 'manager')
            {

                history.push('/manager/home');

            }
        })
    }

    const handleLoginIn = async () =>
    {
        if(typeof(username) && typeof(password) == "string")
        {
            const data = {
                username, password
            }
            const url = `http://127.0.0.1:8000/api/login`;
            const axios = require('axios').default;
            await axios({
                method: 'post',
                url: url,
                data:data,
            }).then( response => {
                if(response.data == 'error')
                {
                    console.log('Username or password is wrong');
                }
                else{
                    setCookie('name', response.data.name, { path: '/' });
                    setCookie('email', response.data.email, { path: '/' });
                    setCookie('u_id', response.data.u_id, { path: '/' });
                    setCookie('type', response.data.type, { path: '/' });
                    console.log(cookies.email);
                    console.log(cookies.name);
                    console.log(cookies.u_id);
                    console.log(cookies.type);
                    console.log(response.data);
                    if(response.data.type == 'manager')
                    {

                    history.push('/manager/home');

                    }
                    else if(response.data.type == 'customer')
                    {
                    history.push('/customer');
                    }

                    if(response.data.type == 'worker')
                    {
                    history.push('/worker');

                    }
                }
            })
        }
        else
        {
            setMessage('Please enter User Name and Password');
        }
    }

    return (
        <div>

            <center><b><h1> Login Page </h1></b></center>

            <center>
                <h2>Sign Up Here</h2>
                <span>Log in to your account using username and password</span>
                <br/><br/>
                <Form>
                    <table border='2' width='20%'>
                        <tr>
                            <td>
                                <Form.Group className="mb-3" >
                                    <Form.Label>User Name</Form.Label>
                                    <Form.Control type="text" onChange={handleUserNameChange} placeholder="Enter name" />
                                </Form.Group>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <Form.Group className="mb-3" >
                                    <Form.Label>Password</Form.Label>
                                    <Form.Control type="password" onChange={handlePasswordChange} placeholder="Password" />
                                </Form.Group>
                            </td>
                        </tr>
                        <Alert variant='warning'>
                            {message}
                        </Alert>
                        <br />
                        <tr>
                            <center><Button onClick={handleLoginIn}>Log In</Button></center>
                        </tr>
                    </table>
                    <center><span>New Member,Please <Link to="/signup">Sign Up</Link></span></center>
                </Form>
            </center>
            <button onClick={() => handleGoogleLogin(googleProvider)}>Google</button>
            <Link to="/customer"><button>Customer Dashboard</button></Link>

            <Link to="/worker"><button>Worker Dashboard</button></Link>
            </div>
    )
}

export default Login
