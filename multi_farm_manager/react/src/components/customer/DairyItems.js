import React from 'react';
import { useState } from 'react';
import { UseDairyItemFetch } from './UseDairyItemFetch';
import { Link } from 'react-router-dom';

function DairyItems() {

    const [dairyItems, setDairyItems] = useState([]);

    UseDairyItemFetch('http://localhost:8000/api/customer/dairies', setDairyItems);

    const handleConfirm = (id) =>
    {
        // const url = `http://127.0.0.1:8000/api/manager/newborn/confirm/${id}`;
        // fetch(url);
        // const data = cows.filter((cow) => cow.co_id != id);
        // setCows(data)
    }

    return (
        <div>
            <br/>
            <br/>
            <center><b><h1> Dairy Items </h1></b></center>
            <br/>

            <center>
            <table id="datatable" className="table table-striped table-bordered" style={{width:'50%'}}>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        dairyItems.map( item =>
                            (
                                <tr>
                                    <td>{item.i_id}</td>
                                    <td>{item.name}</td>
                                    <td>{item.price}</td>
                                    <td><Link to={`/dairy/details/${item.i_id} ${item.name} ${item.price}`}>Details</Link></td>
                                </tr>
                            )
                        )
                    }
                </tbody>
            </table>
           </center>
        </div>
    )
}

export default DairyItems;