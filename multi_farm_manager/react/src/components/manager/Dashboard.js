import React from 'react'
import Navbar from './Navbar'
import Home from './Home';
import Staffs from './Staffs';
import AddStaff from './AddStaff';
import EditStaff from './EditStaff';
import AddCow from './AddCow';
import Cows from './Cows';
import { Col, Container, Row, Button } from 'react-bootstrap';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import NewBornCows from './NewBornCows';
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
                            <Switch>
                                <Route path='/manager/home'>
                                    <Home />
                                </Route>
                                <Route path='/manager/staff/add'>
                                    <AddStaff />
                                </Route>
                                <Route path='/manager/staff/edit/:id'>
                                    <EditStaff />
                                </Route>
                                <Route path='/manager/staff'>
                                    <Staffs />
                                </Route>
                                <Route path='/manager/cow/add'>
                                    <AddCow />
                                </Route>
                                <Route path='/manager/cow'>
                                    <Cows />
                                </Route>
                                <Route path='/manager/newborn'>
                                    <NewBornCows />
                                </Route>
                            </Switch>
                        </Col>
                    </Router>
                </Row>
            </Container>
        </div>
    )
}

export default Dashboard
