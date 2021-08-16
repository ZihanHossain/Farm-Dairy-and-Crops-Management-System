
function TimeSchedule (){
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
                    <tr>
                        <td>01</td>
                        <td>52</td>
                        <td>5/2/2021</td>
                        <td>8/2/2021</td>
                        <td>Action</td>
                        {/* <td><a href=""><i className="fa fa-pencil"></i>Details</a></td> */}
                    </tr>
                </tbody>
            </table>
           </center>
        </div>

)}


export default TimeSchedule;