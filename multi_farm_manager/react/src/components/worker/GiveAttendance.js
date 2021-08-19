import React from 'react';
import { Table } from 'react-bootstrap';
import { useState } from 'react';
import { UseGiveAttendanceFetch } from './UseGiveAttendanceFetch';

import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';


function GiveAttendance (){

    const [detail, setAttendance] = useState([]);
    const [user, setUser] = useState([]);

    UseGiveAttendanceFetch('http://localhost:8000/api/worker/give/attendance', setAttendance, setUser);

    // const handleConfirm = (id) =>
    // {
    //     const url = `http://127.0.0.1:8000/api/manager/newborn/confirm/${id}`;
    //     fetch(url);
    //     const data = cows.filter((cow) => cow.co_id != id);
    //     setCows(data)
    // }
    
    return (
        <div>
            <br/>
            <br/>
            <center><b><h1> Give Attendance </h1></b></center>
            <br/>

            <center>
            <table id="datatable" className="table table-striped table-bordered" style={{width:'50%'}}>
                <thead>
                    <tr>
                        <th>Login ID</th>
                        <th>User ID</th>
                        <th>Login Time</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        detail.map( detail =>
                            (
                                <tr>
                                <td>{detail.l_id}</td>
                                <td>{detail.u_id}</td>
                                <td>{detail.login_time}</td>
                                </tr>
                            )
                        )
                    }
                    
                </tbody>
            </table>
           </center>
        </div>

)}


export default GiveAttendance;