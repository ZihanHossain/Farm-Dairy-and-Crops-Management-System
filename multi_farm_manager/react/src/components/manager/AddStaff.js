import React from 'react'
import { Container, Form, Button, Row, Col, Dropdown } from 'react-bootstrap';
import { useState, useEffect } from 'react';
import { useShiftFetch } from './useShiftFetch';
import { Link } from 'react-router-dom';

function  AddStaff() {

    const [name, setName] = useState();
    const [username, setUserName] = useState();
    const [password, setPassword] = useState();
    const [type, setType] = useState();
    const [email, setEmail] = useState();
    const [salary, setSalary] = useState();
    const [gender, setGender] = useState();
    const [shiftid, setShiftId] = useState();
    const [shiftdetails, setShiftDetails] = useState([{id: "asd"}]);

    useShiftFetch('http://127.0.0.1:8000/api/manager/getshiftdetails', setShiftDetails);

    const handleNameChange = (e) => {
        setName(e.target.value);
    }

    const handleUserNameChange = (e) => {
        setUserName(e.target.value);
    }

    const handlePasswordChange = (e) => {
        setPassword(e.target.value);
    }

    const handleEmailChange = (e) => {
        setEmail(e.target.value);
    }

    const handleSalaryChange = (e) => {
        setSalary(e.target.value);
    }

    const handleGenderChange = (e) => {
        setGender(e.target.value);
    }

    const handleTypeChange = (e) => {
        setType(e.target.value);
    }

    const handleShiftIdChange = (e) => {
        setShiftId(e);
    }

    const handleSubmit = (e) => {
        //e.preventDefault();
        const data = {
            name, username, password, type, email, salary, gender, shiftid
        }
        const url = `http://127.0.0.1:8000/api/manager/staff/add`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        });
        console.log(data);
        <Link to="/manager/staff"></Link>
    }

    return (
        <div>
            <Container>
                <Form>
                    <Form.Group className="mb-3" >
                        <Form.Label>Name</Form.Label>
                        <Form.Control type="text" onChange={handleNameChange} placeholder="Enter name" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="email" onChange={handleEmailChange} placeholder="Enter email" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>User Name</Form.Label>
                        <Form.Control type="text" onChange={handleUserNameChange} placeholder="Enter name" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" onChange={handlePasswordChange} placeholder="Password" />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Salary</Form.Label>
                        <Form.Control type="number" onChange={handleSalaryChange} placeholder="Salary" />
                    </Form.Group>

                    <Form.Group>
                        <Dropdown>
                            <Dropdown.Toggle variant="success" id="dropdown-basic">
                                Select Shift
                            </Dropdown.Toggle>
                            <Dropdown.Menu onSelect={handleShiftIdChange}>
                                { shiftdetails.map( shift => 
                                    <Dropdown.Item eventKey={shift.sh_id} onSelect={handleShiftIdChange}>{shift.shift_name}</Dropdown.Item> 
                                    )
                                }
                            </Dropdown.Menu>
                        </Dropdown>
                    </Form.Group>

                    <br />

                    <Form.Group as={Row} className="mb-3">
                    <Form.Label as="legend" column sm={2}>
                        Gender
                    </Form.Label>
                    <Col sm={10}>
                        <Form.Check
                        onChange={handleGenderChange}
                        type="radio"
                        label="Male"
                        value="male"
                        name="gender"
                        id="name"
                        />
                        <Form.Check
                        onChange={handleGenderChange}
                        type="radio"
                        label="Female"
                        value="female"
                        name="gender"
                        id="name"
                        />
                    </Col>
                    </Form.Group>

                    <Form.Group as={Row} className="mb-3">
                    <Form.Label as="legend" column sm={2}>
                        Farm Type
                    </Form.Label>
                    <Col sm={10}>
                        <Form.Check
                        onChange={handleTypeChange}
                        type="radio"
                        label="Dairy"
                        value="dairy"
                        name="type"
                        id="name"
                        />
                        <Form.Check
                        onChange={handleTypeChange}
                        type="radio"
                        label="Crop"
                        value="crop"
                        name="type"
                        id="name"
                        />
                    </Col>
                    </Form.Group>
                    
                    <Button variant="primary" onClick={handleSubmit}>
                        Add
                    </Button>
                </Form>
            </Container>
        </div>
    )
}

export default AddStaff
