

function DairyItems() {
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
                    <tr>
                        <td>01</td>
                        <td>Milk</td>
                        <td>50</td>
                        <td><a href=""><i className="fa fa-pencil"></i>Details</a></td>
                    </tr>
                </tbody>
            </table>
           </center>
        </div>
    )
}

export default DairyItems;