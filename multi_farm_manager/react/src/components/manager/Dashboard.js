import React from 'react'
import Navbar from './Navbar'
import Home from './Home';
import Staffs from './Staffs';
import AddStaff from './AddStaff';
import EditStaff from './EditStaff';
import AddCow from './AddCow';
import Cows from './Cows';

import CustomerProfile from '../customer/CustomerProfile';
import CropItems from '../customer/CropItems';
import DairyItems from '../customer/DairyItems';

import { Col, Container, Row, Button } from 'react-bootstrap';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import NewBornCows from './NewBornCows';
import MilkCollection from './MilkCollection';
import CowDetails from './CowDetails';
//import { useFetch } from './useFetch';
//import { useState } from 'react';

//Workers:
import TimeSchedule from '../cropworker/TimeSchedule';
import ProfileSettings from './ProfileSettings';
import Vaccination from './Vaccination';
import VaccinationCheck from './VaccinationCheck';

const Dashboard = ({type}) => {
    return (
        <div>
            <Container>
                <Row>
                    <Router>
                        <Col sm={2}>
                            <Navbar typee={type}/>
                        </Col>
                        <Col sm={10}>
                            <div className="d-flex justify-content-end">
                                <Button>Logout</Button>
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
                                <Route path='/manager/milkcollection/cowdetails/:id'>
                                    <CowDetails />
                                </Route>
                                <Route path='/manager/milkcollection'>
                                    <MilkCollection />
                                </Route>
                                <Route path='/manager/profilesettings'>
                                    <ProfileSettings />
                                </Route>
                                <Route path='/manager/vaccination/check/:id'>
                                    <VaccinationCheck />
                                </Route>
                                <Route path='/manager/vaccination'>
                                    <Vaccination />
                                </Route>

                                {/* -------->Customer<-------- */}
                                <Route path="/customer/profile">
                                    <CustomerProfile />
                                </Route>
                                <Route path="/customer/crops">
                                    <CropItems />
                                </Route>
                                <Route path="/customer/dairies">
                                    <DairyItems />
                                </Route>

                                <Route path="/cropworker/time/schedule">
                                    <TimeSchedule />
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
