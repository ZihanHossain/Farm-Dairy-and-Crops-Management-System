import React from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import { useHomeFetch } from './useHomeFetch';
import { useState } from 'react';

function Home() {

    const [users, setUsers] = useState();
    const [new_born_cows, setNew_born_cows] = useState();
    const [cows, setCows] = useState();
    const [total_milking_amount, setTotal_milking_amount] = useState();

    useHomeFetch('http://127.0.0.1:8000/api/manager/home', setUsers, setCows, setNew_born_cows, setTotal_milking_amount);

    return (
        <div>
            <Row>
                <Col>
                    <div>
                        Total Staff
                    </div>
                    <div>
                        {users}
                    </div>
                </Col>
                <Col>
                    <div>
                        New Born Cow's
                    </div>
                    <div>
                        {new_born_cows}
                    </div>
                </Col>
                <Col>
                    <div>
                        Total Cow's
                    </div>
                    <div>
                        {cows}
                    </div>
                </Col>
                <Col>
                    <div>
                        Total Milk Collected
                    </div>
                    <div>
                        {total_milking_amount}
                    </div>
                </Col>
            </Row>
        </div>
    )
}

export default Home
