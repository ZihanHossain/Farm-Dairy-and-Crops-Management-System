import React from 'react';
import { Button } from 'react-bootstrap';
import { useState } from 'react';
import { UseDairyItemFetch } from './UseDairyItemFetch';
import { Link, useParams } from 'react-router-dom';

function CropItemDetails() {

    const [amount, setAmount] = useState();

    const params = useParams();
    const [cropItems, setCropItems] = useState([]);

    const id = params.id;
    const name = params.name;
    const price = params.price;

    //UseDairyItemFetch(`http://localhost:8000/api/customer/dairies/details/${params.id}`, setDairyItems);

    const handleAmountChange = (e) => {
        setAmount(e.target.value);
    }

    const handleSubmit = (e) => {
        //e.preventDefault();
        const data = {
            id, name, price, amount
        }
        const url = `http://localhost:8000/api/customer/dairies/details/${id}`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        });
        console.log(data);
        <Link to="/customer/crops"></Link>
    }
    
    return (
        <div>
            <br/>
            <br/>
            <center><b><h1> Crop Items </h1></b></center>
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
                             <tr>
                                    <td>{params.id}</td>
                                    <td>{params.name}</td>
                                    <td>{params.price}</td>
                                    <td><input type='text' onChange={handleAmountChange} placeholder='Enter Amount'></input></td>
                                    <td><Button variant="primary" onClick={handleSubmit}>Add to Cart</Button></td>
                                </tr>
                    }   
                </tbody>
            </table>
           </center>
        </div>
    )
}

export default CropItemDetails;