import { Button, Form } from 'react-bootstrap';
import React from 'react'
import { useState } from 'react'
import { Col, Container, Row, Table } from 'react-bootstrap'
import { useParams } from 'react-router-dom'
import { useCowDetailsFetch } from './useCowDetailsFetch';

function CowDetails() {

    const [milkhistory, setMilkHistory] = useState([])
    const [feedhistory, setFeedsHistory] = useState([])
    const [vaccinated, setVaccinated] = useState([])
    const [totalmilkprice, setTotalMilkPrice] = useState([])
    const [totalfeedprice, setTotalFeedPrice] = useState([])
    const [cow, setCow] = useState([])

    const {id:co_id} = useParams();

    useCowDetailsFetch(`http://127.0.0.1:8000/api/manager/milkcollection/cowdetails/${co_id}`, setMilkHistory, setFeedsHistory, setVaccinated, setTotalMilkPrice, setTotalFeedPrice, setCow);

    return (
        <div>
            <Container>
                <Row>
                    <Col sm={5}>
                        <Row>
                        <h4>Milking History</h4>
                            <Table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Lit.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                        milkhistory.map(history => (
                                            <tr>
                                                <td>{history.date}</td>
                                                <td>{history.liter_amount}</td>
                                            </tr>
                                        ))
                                    }
                                </tbody>
                            </Table>
                        </Row>
                        <Row>
                        <h4>Feeding History</h4>
                            <Table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Quality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                        feedhistory.map(feed => (
                                            <tr>
                                                <td>{feed.date}</td>
                                                <td>{feed.amount}</td>
                                                <td>{feed.quality}</td>
                                            </tr>
                                        ))
                                    }
                                </tbody>
                            </Table>
                        </Row>
                    </Col>

                    <Col>
                    
                    </Col>

                    <Col sm={6}>
                        {/* <Row>
                            <Col sm={6}>
                                Vaccinated:    
                            </Col>
                            <Col sm={6}>
                                {vaccinated}    
                            </Col>
                        </Row> */}
                        <Table>
                            <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Result 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cow Id:</td>
                                    <td>{co_id}</td>
                                </tr>
                                <tr>
                                    <td>Vaccinated</td>
                                    <td>{vaccinated}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{cow.price} Tk.</td>
                                </tr>
                                <tr>
                                    <td>Total price of collected milk</td>
                                    <td>{totalmilkprice} Tk.</td>
                                </tr>
                                <tr>
                                    <td>Total price of consumed feeds</td>
                                    <td>{totalfeedprice} Tk.</td>
                                </tr>
                            </tbody>
                        </Table>
                    </Col>
                </Row>  
            </Container>  
        </div>
    )
}

export default CowDetails
