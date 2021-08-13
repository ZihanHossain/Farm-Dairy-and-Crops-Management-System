import React from 'react'
import { Nav } from 'react-bootstrap';
import {Link} from 'react-router-dom';

function Navbar() {
    return (
        <Nav className="flex-column">
            <Nav>
                <Link to="/manager/home">Home</Link> 
            </Nav>
            <Nav>
                <Link to="/manager/staff">Staff</Link> 
            </Nav>
            <Nav>
                <Link to="/manager/cow">Cows Information</Link> 
            </Nav>
        </Nav>
    );
}

export default Navbar
