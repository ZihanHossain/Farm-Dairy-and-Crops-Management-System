

function CustomerProfile() {
    return (
        <div>
            <br/>
            <br/>
           <center><b><h1> Profile Page </h1></b></center>

           <center>
                <table className="table table-striped" style={{width:'50%'}} border="2px" align="center">
                    <tr>
                        <th>Name: </th>
                        <td>Mashiur Rahman</td>
                    </tr>
                    <tr>
                        <th>ID: </th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Username: </th>
                        <td>borshon</td>
                    </tr>
                    <tr>
                        <th>Email Address: </th>
                        <td>fortuneborshon@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Gender: </th>
                        <td>Male</td>
                    </tr>
                    <tr>
                        <th>User Type: </th>
                        <td>Customer</td>
                    </tr>
                    <br />
                </table>
                <input type='button' name='submit' value='Edit'></input>
                <input type='button' name='submit' value='Delete'></input>
           </center>
        </div>
    )
}

export default CustomerProfile;