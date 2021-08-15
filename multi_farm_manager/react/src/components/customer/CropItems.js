import React from 'react';
import { useState } from 'react';
import { UseCropItemFetch } from './UseCropItemFetch';


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
                                    <td><a href=""><i className="fa fa-pencil"></i>Details</a></td>
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