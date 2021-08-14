import React from 'react'
import { Link } from 'react-router-dom';
import { googleProvider } from "../config/authMethord";
import socialMediaAuth from '../service/auth';

function Login() {

    const handleGoogleLogin = async(provider) => {
        const res = await socialMediaAuth(provider);
        console.log(res.displayName);
        console.log(res.email);
        const url = `http://127.0.0.1:8000/api/login`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:[res.displayName, res.email],
        }).then(response => {
            console.log(response.data);
        })
    }

    return (
        <div>
            <center><b><h1> Login Page </h1></b></center>

            <center>
                <h2>Sign Up Here</h2>
                <span>Log in to your account using username and password</span>
                <br/><br/>
                <form>
                    <table border='2'>
                        <tr>
                            <td><input type='text' name='uname' value='' placeholder='Username'></input></td>
                        </tr>
                        <tr>
                            <td><input type='text' name='password' value='' placeholder='Password'></input></td>
                        </tr>
                        <br />
                        <tr>
                            <center><td><input type='submit' name='login' value='Login'></input></td></center>
                        </tr>
                    </table>
                    <center><span>New Member,Please <Link to="/signup">Sign Up</Link></span></center>
                </form>
            </center>
            <button onClick={() => handleGoogleLogin(googleProvider)}>Google</button>
            <Link to="/manager"><button>LOL</button></Link>
            <Link to="/customer"><button>Customer Dashboard</button></Link>
        </div>
    )
}

export default Login
