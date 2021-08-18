import React from 'react';
import { useState } from 'react';
import { UseCartFetch } from './UseCartFetch';
import { Link } from 'react-router-dom';


function Cart() {
    const [cart, setCart] = useState([]);

    UseCartFetch('http://localhost:8000/api/customer/cart', setCart);

    return (
        <div>
            <br/>
            <br/>
            <center><b><h1> Cart </h1></b></center>
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
                        cart.map( item =>
                            (
                                <tr>
                                    <td>{item.i_id}</td>
                                    <td>{item.i_name}</td>
                                    <td>{item.i_price}</td>
                                    <td>{item.amount}</td>
                                    <td><Link to={`/crop/details/${item.i_id} ${item.name} ${item.price}`}>Delete</Link></td>
                                    <td><Link to={`/crop/details/${item.i_id} ${item.name} ${item.price}`}>Confirm</Link></td>
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

export default Cart;