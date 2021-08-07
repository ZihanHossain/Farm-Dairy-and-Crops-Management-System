import React from 'react'
import Navbar from './Navbar'
import Home from './Home';
import { Col, Container, Row } from 'react-bootstrap'
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import { Button } from 'react-bootstrap';
//import { useFetch } from './useFetch';
//import { useState } from 'react';


function Dashboard() {
    return (
        <div>
            <Container>
                <Row>
                    <Col sm={4}>
                        <Navbar />
                    </Col>
                    <Col sm={8}>
                        <div className="d-flex justify-content-end">
                            <Button>Log Out</Button>
                        </div>
                        <Router>
                            <Route path='/manager/home'>
                                <Home />
                            </Route>
                        </Router>
                    </Col>
                </Row>
            </Container>
        </div>
    )
}

export default Dashboard
