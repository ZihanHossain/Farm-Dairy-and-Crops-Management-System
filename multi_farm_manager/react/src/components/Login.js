import React from 'react'
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
            <button onClick={() => handleGoogleLogin(googleProvider)}>Google</button>
        </div>
    )
}

export default Login
