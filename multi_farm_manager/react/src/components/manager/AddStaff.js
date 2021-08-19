import React from 'react'
import { Container, Form, Button, Row, Col, Dropdown } from 'react-bootstrap';
import { useState, useEffect } from 'react';
import { useShiftFetch } from './useShiftFetch';
import { Link, useHistory } from 'react-router-dom';

const AddStaff = ({callback}) => {

    const [name, setName] = useState();
    const [nmame, setNmame] = useState();
    const [username, setUserName] = useState();
    const [umsername, setUmserName] = useState();
    const [password, setPassword] = useState();
    const [pmassword, setPmassword] = useState();
    const [type, setType] = useState();
    const [tmype, setTmype] = useState();
    const [email, setEmail] = useState();
    const [emmail, setEmmail] = useState();
    const [salary, setSalary] = useState();
    const [smalary, setSmalary] = useState();
    const [gender, setGender] = useState();
    const [gmender, setGmender] = useState();
    const [shiftid, setShiftId] = useState();
    const [smhiftid, setSmhiftId] = useState();
    const [shiftdetails, setShiftDetails] = useState([{id: "asd"}]);

    const history = useHistory();

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
        if(name == null)
        {
            setNmame('PLease enter name')
        }
        if(email == null)
        {
            setEmmail('PLease enter email')
        }
        if(username == null)
        {
            setUmserName('PLease enter username')
        }
        if(password == null)
        {
            setPmassword('PLease enter password')
        }
        if(gender == null)
        {
            setGmender('PLease select a gender')
        }
        if(type == null)
        {
            setTmype('PLease select a type')
        }
        if(salary == null)
        {
            setSmalary('PLease enter salary')
        }
        if(name != null && email != null && username != null && password != null && gender != null && type != null && salary != null)
        {
            const data = {
                name, username, password, type, email, salary, gender, shiftid
            }
            const url = `http://127.0.0.1:8000/api/manager/staff/add`;
            const axios = require('axios').default;
            axios({
                method: 'post',
                url: url,
                data:data,
            }).then(response => {
                callback(response.data);
                console.log(response.data);
                history.push('/manager/staff');
            });
        }
        //e.preventDefault();
        
    }

    return (
        <div>
            <Container>
                <Form>
                    <Form.Group className="mb-3" >
                        <Form.Label>Name</Form.Label>
                        <Form.Control type="text" onChange={handleNameChange} placeholder="Enter name" />
                        {nmame}
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Email</Form.Label>
                        <Form.Control type="email" onChange={handleEmailChange} placeholder="Enter email" />
                        {emmail}
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>User Name</Form.Label>
                        <Form.Control type="text" onChange={handleUserNameChange} placeholder="Enter name" />
                        {umsername}
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" onChange={handlePasswordChange} placeholder="Password" />
                        {pmassword}
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Salary</Form.Label>
                        <Form.Control type="number" onChange={handleSalaryChange} placeholder="Salary" />
                        {smalary}
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
                    {gmender}
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
                    {tmype}
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
