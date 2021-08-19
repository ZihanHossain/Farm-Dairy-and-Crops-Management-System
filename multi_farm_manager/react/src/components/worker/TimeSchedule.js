import React from 'react';
import { Table } from 'react-bootstrap';
import { useState } from 'react';
import { UseTimeScheduleFetch } from './UseTimeScheduleFetch';

import { Button } from 'react-bootstrap';
import { Link } from 'react-router-dom';


function TimeSchedule (){

    const [schedule, setTimeSchedule] = useState([]);
    const [pro, setProcess] = useState([]);

    UseTimeScheduleFetch('http://localhost:8000/api/worker/time/schedule', setTimeSchedule);
    UseTimeScheduleFetch('http://localhost:8000/api/worker/time/schedule/{s_id}', setProcess);

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
            <center><b><h1> Time Schedule </h1></b></center>
            <br/>

            <center>
            <table id="datatable" className="table table-striped table-bordered" style={{width:'50%'}}>
                <thead>
                    <tr>
                        <th>Season ID</th>
                        <th>Item ID</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        schedule.map( timing =>
                            (
                                <tr>
                                <td>{timing.s_id}</td>
                                <td>{timing.i_id}</td>
                                <td>{timing.starting_date}</td>
                                <td>{timing.ending_date}</td>
                                {/* <td>{process.action}</td> */}

                                <td><Link to={`/worker/time/schedule/{s_id}/${timing.action}`}>Process</Link></td>
                                {/* <td>
                                
                                    pro.map(process =>{
                                        if(timing.action == "active")

                                    }
                                        (
                                        <Link to={`worker/time/schedule/${timing.s_id}`}>Process</Link>;
                                        <Link to="#">Processed</Link>;
                                        )
                                        )

                                
                                </td> */}
                                </tr>
                            )
                        )
                    }
                    
                </tbody>
            </table>
           </center>
        </div>

)}


export default TimeSchedule;