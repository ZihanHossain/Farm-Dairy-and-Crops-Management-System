import React from 'react'
import { Container, Form, Button, Row, Col } from 'react-bootstrap';
import "react-datepicker/dist/react-datepicker.css";
import { useState, useEffect } from 'react';
import { useHistory } from 'react-router-dom';
import DatePicker from "react-datepicker";

function  AddCow() {

    const [baseprice, setBasePrice] = useState();
    const [gender, setGender] = useState();
    const [birtdate, setBirthDate] = useState(new Date());
    const [availability, setAvailablity] = useState();

    const history = useHistory();

    //useShiftFetch('http://127.0.0.1:8000/api/manager/getshiftdetails', setShiftDetails);

    const handleBasePriceChange = (e) => {
        setBasePrice(e.target.value);
    }

    const handleGenderChange = (e) => {
        setGender(e.target.value);
    }

    const handleBirthDateChange = (e) => {
        setBirthDate(e);
    }

    const handleAvailablityChange = (e) => {
        setAvailablity(e.target.value);
    }

    const handleSubmit = (e) => {
        // //e.preventDefault();
        const data = {
            baseprice, gender, birtdate: `${birtdate.getFullYear()}-${birtdate.getMonth()}-${birtdate.getDate()}`, availability
        }
        const url = `http://127.0.0.1:8000/api/manager/cow/add`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        });
        console.log(data);
        history.push('/manager/cow')
    }

    return (
        <div>
            <Container>
                <Form>

                    <Form.Group className="mb-3" >
                        <Form.Label>Base Price</Form.Label>
                        <Form.Control type="number" onChange={handleBasePriceChange} placeholder="Base Price" />
                    </Form.Group>

                    <DatePicker 
                        onChange={handleBirthDateChange} 
                        selected={birtdate} 
                    />

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
                        Availablity
                    </Form.Label>
                    <Col sm={10}>
                        <Form.Check
                        onChange={handleAvailablityChange}
                        type="radio"
                        label="Available"
                        value="available"
                        name="type"
                        id="name"
                        />
                        <Form.Check
                        onChange={handleAvailablityChange}
                        type="radio"
                        label="Sold"
                        value="sold"
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

export default AddCow