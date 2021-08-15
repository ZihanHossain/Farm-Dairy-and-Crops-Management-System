

function Registration() {
    return (
        <div>
            <br/>
            <br/>
           <center><b><h2> Customer Registration </h2></b></center>

           <center>
           <h3>Sign Up Here</h3>
           <span>Create New Account</span>
               <form>
                    <table border='2'>
                        <tr>
                            <td>Name: </td>
                            <td><input type='text' name='name' value=''></input></td>
                        </tr>
                        <tr>
                            <td>Username: </td>
                            <td><input type='text' name='uname' value=''></input></td>
                        </tr>
                        <tr>
                            <td>Email Address: </td>
                            <td><input type='text' name='email' value=''></input></td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type='text' name='password' value=''></input></td>
                        </tr>
                        <br />
                        <tr>
                            <td></td>
                            <td><input type='button' name='submit' value='Submit'></input></td>
                        </tr>
                    </table>
               </form>
           </center>
        </div>
    )
}

export default Registration;