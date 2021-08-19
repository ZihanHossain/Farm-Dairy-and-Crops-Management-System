import React from 'react'
import { Nav } from 'react-bootstrap';
import {Link} from 'react-router-dom';
import { useCookies } from 'react-cookie';

const Navbar = ({typee}) => {

    const [cookies, setCookie] = useCookies();

    if(typee=="manager")
    {
        return (
            <Nav className="flex-column">
                <span>
                    Welcome: {cookies.name}
                </span>
                <Nav>
                    <Link to="/manager/home">Home</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/staff">Staff</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/cow">Cows Information</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/newborn">New Born Cows</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/milkcollection">Milk Collection</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/profilesettings">Profile Settings</Link> 
                </Nav>
                <Nav>
                    <Link to="/manager/vaccination">Vaccination</Link> 
                </Nav>
            </Nav>
        );
    }

    else if(typee=="customer")
    {
        return(
        <Nav>
            <span>
                <h3>Welcome: {cookies.name}</h3>
            </span> 
            <Link to="/customer/profile"> Profile </Link>|| 
            <Link to="/customer/dairies"> Dairy Items </Link>|| 
            <Link to="/customer/crops"> Cops Items </Link>||
            <Link to="/customer/cart"> Cart </Link>
        </Nav>
        );
    }

    else if(typee=="worker")
    {
        return(
        <Nav> 
            <Link to="/worker/time/schedule">Time Schedule</Link>||
            <Link to="/worker/give/attendance">Give Attendance</Link>
        </Nav>
        );
    }

}

export default Navbar
