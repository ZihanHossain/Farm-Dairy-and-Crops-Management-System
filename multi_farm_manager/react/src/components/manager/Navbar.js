import React from 'react'
import { Nav } from 'react-bootstrap';

function Navbar() {
    return (
        <Nav className="flex-column">
            <Nav.Link href="/manager/home">
                Dashboard
            </Nav.Link>
            <Nav.Link href="b">
                Staff
            </Nav.Link>
        </Nav>
    );
}

export default Navbar
