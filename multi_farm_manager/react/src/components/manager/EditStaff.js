import React from 'react'
import { Container, Form, Button, Row, Col, Dropdown } from 'react-bootstrap';
import { useState, useEffect } from 'react';
// import { useShiftFetch } from './useShiftFetch';
import { Link, useParams } from 'react-router-dom';
import { useEditStaffFetch } from './useEditStaffFetch';

function  EditStaff() {

    const [name, setName] = useState('ad');
    const [username, setUserName] = useState('asd');
    const [password, setPassword] = useState('asd');
    const [type, setType] = useState('aa');
    const [email, setEmail] = useState('a');
    const [salary, setSalary] = useState('a');
    const [gender, setGender] = useState('a');
    const [shiftid, setShiftId] = useState('a');
    const [shiftdetails, setShiftDetails] = useState([{id: "asd"}]);
    const {id:sid} = useParams();

    useEditStaffFetch(`http://127.0.0.1:8000/api/manager/getstaffdetails/${sid}`, setName, setUserName, setPassword, setType, setEmail, setSalary, setGender, setShiftId, setShiftDetails);

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
        const url = `http://127.0.0.1:8000/api/manager/staff/edit/${sid}`;
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
                        <Form.Control type="text" onChange={handleNameChange} placeholder={name} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="email" onChange={handleEmailChange} placeholder={email} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>User Name</Form.Label>
                        <Form.Control type="text" onChange={handleUserNameChange} placeholder={username} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" onChange={handlePasswordChange} placeholder={password} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Salary</Form.Label>
                        <Form.Control type="number" onChange={handleSalaryChange} placeholder={salary} />
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
                        checked={gender == 'male'}
                        id="name"
                        />
                        <Form.Check
                        onChange={handleGenderChange}
                        type="radio"
                        label="Female"
                        value="female"
                        name="gender"
                        checked={gender == 'female'}
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
                        checked={type == 'dairy'}
                        id="name"
                        />
                        <Form.Check
                        onChange={handleTypeChange}
                        type="radio"
                        label="Crop"
                        value="crop"
                        name="type"
                        checked={type == 'crop'}
                        id="name"
                        />
                    </Col>
                    </Form.Group>
                    
                    <Button variant="primary" onClick={handleSubmit}>
                        Edit
                    </Button>
                </Form>
            </Container>
        </div>
    )
}

export default EditStaff
