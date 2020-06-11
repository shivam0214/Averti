import React, { Component } from 'react';
import Checkbox from '@material-ui/core/Checkbox';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Imageb from '../Advisor/Imageb/Imageb';
import '../Advisor/Advisor.css'

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

  class AdvisorWhen extends Component{
         
    continue = e =>{
    e. preventDefault();
        this.props.nextStep();
      }
    back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
      render(){
          return <div><Imageb/>
          <Row className="top justify-content-center">
          <Col md="6" xs="12" sm="12">      
          <Card className="top"> 
          <CardBody>        
                <Row>
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col md='12' xs="12" sm="12">
                   <h5 className="text-info text-center">WHEN</h5> 
                  </Col>
                </Row>
              <Row>
              <FormGroup>
                <Col className="text-center text-info">
                <p >How soon would you like to schedule a meeting?</p>
                </Col>
              </FormGroup>
                </Row>
                <Row>
                <Col xs="12" sm="4" md="6" >
                <FormControlLabel value="" control={<Checkbox  color="primary" />}
                  className="labelcheck"  name="meeting"  label="ASAP"
                        labelPlacement="end"/>
                </Col>
                <Col xs="12" sm="4" md="6" >
                <FormControlLabel value="" control={<Checkbox  color="primary" />}
                    className="labelcheck" name="meeting"  label="Week From Now"
                        labelPlacement="end"/>
                </Col>
                <Col xs="12" sm="4" md="6" >
                <FormControlLabel value="" control={<Checkbox color="primary" />}
                    className="labelcheck" name="meeting"  label="Month From Now"
                        labelPlacement="end"/>
                </Col>
                <Col xs="12" sm="4" md="6" >
                <FormControlLabel value="" control={<Checkbox color="primary" />}
                    className="labelcheck" name="meeting" label="With Six Month"
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
  export default AdvisorWhen;