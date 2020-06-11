import React, { Component } from 'react';
import Imageb from './Imageb/Imageb';
import './Advisor.css'
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

class AdvisorUsername extends Component{
    constructor(props){
        super(props);
        this.state = {
          info:true,
        }
         }
      
    continue = e =>{
        e. preventDefault();
        this.props.nextStep();
    }
    render(){  
        const { values} = this.props; 
        return<div>  <Imageb/>                    
        <Row className="top justify-content-center">
            <Col md="6" xs="12" sm="6"> 
          <Card className="top"> 
                    
        <CardBody>
              <Row>               
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col className="large-text ">
                      <h5 className="text-info">SIGN IN</h5>
                  </Col>
                </Row>
              <Row>           
              <Col md='12' xs="12" sm="12">
                    <FormGroup>
                    <Label className="sr-only" htmlFor="dealername">UserName</Label>
                    <Input type="text"  id="dealername" name="dealername" placeholder="User Name" />
                    </FormGroup>
                    <FormGroup>
                    <Label className="sr-only" htmlFor="licenseno">Password</Label>
                    <Input type="password" id="password"  name="password" placeholder="Password" />
                    </FormGroup>
                  </Col> 
                   
            </Row>        
            <Button type="submit" className="text-white" color="info" block>Sign up</Button>
        </CardBody> 
        </Card>  
        </Col>
        </Row>
        </div>        
    
    }
}
export default AdvisorUsername;