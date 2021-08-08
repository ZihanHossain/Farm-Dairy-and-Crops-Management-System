import React from 'react'
import Navbar from './Navbar'
import Home from './Home';
import { Col, Container, Row } from 'react-bootstrap'
import {BrowserRouter as Router, Route} from 'react-router-dom';
import { Button } from 'react-bootstrap';
import Staffs from './Staffs';
//import { useFetch } from './useFetch';
//import { useState } from 'react';


function Dashboard() {
    return (
        <div>
            <Container>
                <Row>
                    <Router>
                        <Col sm={2}>
                            <Navbar />
                        </Col>
                        <Col sm={10}>
                            <div className="d-flex justify-content-end">
                                <Button>Log Out</Button>
                            </div>
                            <Route path='/manager/home'>
                                <Home />
                            </Route>
                            <Route path='/manager/staff'>
                                <Staffs />
                            </Route>
                        </Col>
                    </Router>
                </Row>
            </Container>
        </div>
    )
}

export default Dashboard
