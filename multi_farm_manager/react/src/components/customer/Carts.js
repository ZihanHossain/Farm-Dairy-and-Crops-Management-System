import React from 'react';
import { useState } from 'react';
import { UseCartFetch } from './UseCartFetch';
import { Link } from 'react-router-dom';
import { Button } from 'react-bootstrap';


function Carts() {
    const [carts, setCarts] = useState([]);

    UseCartFetch('http://localhost:8000/api/customer/cart', setCarts);
    
    const handleDelete = (id) =>
    {
        const url = `http://localhost:8000/api/customer/cart/delete/${id}`;
        fetch(url);
        const data = carts.filter((cart) => cart.i_id != id);
        setCarts(data)
    }

    const handleConfirm = (id) =>
    {
        const url = `http://localhost:8000/api/customer/cart/confirm/${id}`;
        fetch(url);
        const data = carts.filter((cart) => cart.i_id != id);
        setCarts(data)
    }

    return (
        <div>
            <br/>
            <br/>
            <center><b><h1> Carts </h1></b></center>
            <br/>

            <center>
            <table id="datatable" className="table table-striped table-bordered" style={{width:'50%'}}>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        carts.map( item =>
                            (
                                <tr>
                                    <td>{item.i_id}</td>
                                    <td>{item.i_name}</td>
                                    <td>{item.i_price}</td>
                                    <td>{item.amount}</td>
                                    <td><Button onClick={() => handleDelete(item.i_id)}>Delete</Button> <Button onClick={() => handleConfirm(item.i_id)}>Confirm</Button></td>
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

export default Carts;