import React, { Component } from 'react';
import Imageb from '../Advisor/Imageb/Imageb';
import '../Advisor/Advisor.css'
import Checkbox from '@material-ui/core/Checkbox';
import FormControlLabel from '@material-ui/core/FormControlLabel';

import {
    Button,
    Card,
    CardBody,
    Col,
    FormGroup,
    Input,
    Label,
    Row,
  } from 'reactstrap';

  class AdvisorRisk extends Component{   
    continue = e =>{
      e. preventDefault();
      this.props.nextStep();
    }
    back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
      render(){
          return  <div><Imageb/>
          <Row className="top justify-content-center ">
          <Col md="6" xs="12" sm="12">      
          <Card className="top"> 
          <CardBody>        
                <Row>
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col md='12' xs="12" sm="12">
                   <h5 className="text-center text-info">RISK</h5> 
                  </Col>
                </Row>
                <Row id="top">
                  <Col xs="12" sm="4" md="6">
                  <FormControlLabel value="end" control={<Checkbox color="primary" />}
                      className="labelcheck"  label="Aggressive"
                        labelPlacement="end"/>
                  </Col>
                <Col xs="12" sm="4" md="6">
                <FormControlLabel value="end" control={<Checkbox color="primary" />}
                      className="labelcheck"  label="Moderately Aggressive"
                        labelPlacement="end"/>
                </Col>
                </Row>
                <Row>
                    <Col xs="12" sm="4" md="6">
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                        className="labelcheck" label="Moderate"
                        labelPlacement="end"/>
                    </Col>
                    <Col xs="12" sm="4" md="6">
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                       className="labelcheck"  label="Conservative"
                        labelPlacement="end"/>
                    </Col>                
                </Row>
                  <Button type="submit" size="md" className="float-right" onClick={this.continue} color="info"> Next</Button>
                  <Button type="reset" size="md" onClick={this.back}> PREVIOUS</Button>
                  </CardBody> 
                  </Card> 
          </Col>
          </Row>
          </div>
      
      }
  }
  export default AdvisorRisk;