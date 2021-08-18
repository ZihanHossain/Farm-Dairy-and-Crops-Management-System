import React from 'react'
import { useState} from 'react'
import { Card, Button } from 'react-bootstrap'
import { Link, Redirect, useParams, useHistory } from 'react-router-dom'
import { useVaccinationCheckFetch } from './useVaccinationCheckFetch'

const VaccinationCheck = () => {

    const [vaccinationinfo, setVaccinationInfo] = useState([]);
    const [user1, setUser1] = useState([]);
    const [user2, setUser2] = useState([]);

    const {id:co_id} = useParams();
    const history = useHistory();

    useVaccinationCheckFetch(`http://127.0.0.1:8000/api/manager/vaccination/check/${co_id}`, setVaccinationInfo, setUser1, setUser2);

    const handleDone2 = () => {
        const data = {
            co_id, u_id:15
        }
        const url = `http://127.0.0.1:8000/api/manager/vaccination/check`;
        const axios = require('axios').default;
        axios({
            method: 'post',
            url: url,
            data:data,
        });
        console.log(data);
        history.push(`/manager/vaccination`);
    }

    return (
        <div>
            <Card style={{ width: '18rem' }}>
                <Card.Body>
                    <Card.Title>Vaccine 1</Card.Title>
                    <Card.Text>Vaccinated By: {user1}</Card.Text>
                    <Card.Text>Date: {vaccinationinfo.vacc1_date}</Card.Text>
                    <Link><Button>Vaccinate</Button></Link>
                </Card.Body>
            </Card>
            <Card style={{ width: '18rem' }}>
                <Card.Body>
                    <Card.Title>Vaccine 2</Card.Title>
                    <Card.Text>Vaccinated By: {user2}</Card.Text>
                    <Card.Text>Date: {vaccinationinfo.vacc2_date}</Card.Text>
                    <Button onClick={handleDone2}>Vaccinate</Button>
                </Card.Body>
            </Card>
        </div>
    )
}

export default VaccinationCheck
