import React from 'react';
import { useState } from 'react';
import { UseCropItemFetch } from './UseCropItemFetch';
import { Link } from 'react-router-dom';


function CropItems() {
    const [cropItems, setCropItems] = useState([]);

    UseCropItemFetch('http://localhost:8000/api/customer/crops', setCropItems);

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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        cropItems.map( item =>
                            (
                                <tr>
                                    <td>{item.i_id}</td>
                                    <td>{item.name}</td>
                                    <td>{item.price}</td>
                                    <td><Link to={`/crop/details/${item.i_id} ${item.name} ${item.price}`}>Details</Link></td>
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

export default CropItems;