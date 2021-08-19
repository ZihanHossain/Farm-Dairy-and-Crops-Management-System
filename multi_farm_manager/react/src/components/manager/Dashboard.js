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
import DairyItemDetails from '../customer/DairyItemDetails';
import CropItemDetails from '../customer/CropItemDetails';
import Carts from '../customer/Carts';
import { useCookies } from 'react-cookie';

import { Col, Container, Row, Button } from 'react-bootstrap';
import {BrowserRouter as Router, Route, Switch, useHistory} from 'react-router-dom';
import NewBornCows from './NewBornCows';
import MilkCollection from './MilkCollection';
import CowDetails from './CowDetails';
//import { useFetch } from './useFetch';
//import { useState } from 'react';

//Workers:
import TimeSchedule from '../worker/TimeSchedule';
import GiveAttendance from '../worker/GiveAttendance';



import ProfileSettings from './ProfileSettings';
import Vaccination from './Vaccination';
import VaccinationCheck from './VaccinationCheck';

const Dashboard = ({type}) => {

    const [cookies, setCookie, removeCookie] = useCookies(['type']);

    const history = useHistory();

    const handleLogout = () =>
    {
        removeCookie('name');
        removeCookie('u_id');
        removeCookie('email');
        removeCookie('type');
        history.push('/login');
    }

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
                                <Button onClick={handleLogout}>Logout</Button>
                            </div>
                            <Switch>
                                <Route path='/manager/home'>
                                    <Home />
                                </Route>
                                
                                <Route path='/manager/staff/edit/:id'>
                                    <EditStaff />
                                </Route>
                                <Route path='/manager/staff'>
                                    <Staffs />
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
                                <Route path="/dairy/details/:id :name :price">
                                    <DairyItemDetails />
                                </Route>
                                <Route path="/crop/details/:id :name :price">
                                    <CropItemDetails />
                                </Route>
                                <Route path="/customer/cart">
                                    <Carts />
                                </Route>

                                {/* Worker */}
                                <Route path="/worker/time/schedule">
                                    <TimeSchedule />
                                </Route>
                                <Route path="/worker/give/attendance">
                                    <GiveAttendance />
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
