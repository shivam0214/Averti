import React, { Component } from 'react';
import Imageb from '../Advisor/Imageb/Imageb';
import '../Advisor/Advisor.css'

import {
    Button,
    Card,
    Form,
    CardBody,
    Col,
    FormGroup,
    Label,
    Input,
    Row,
  } from 'reactstrap';

  class AdvisorAssets extends Component{  
        constructor(props){
          super(props);
          this.state = {
            fields : {},
            error : {}
          }
        }
    handleValidation(){
        let fields = this.state.fields;
        let errors = {};
        let formIsValid = true;
          if(!fields["age"]){
          formIsValid= false;
          errors["age"] = " Select Age";
          }
          if(!fields["assets"]){
          formIsValid= false;
          errors["assets"] = " Select Assets";
          }
          if(!fields["retirement_goal"]){
          formIsValid= false;
          errors["retirement_goal"] = " Select Retirement Goal";
          }
          
      this.setState({errors: errors});
      return formIsValid;
      }

    continue = e =>{
    e. preventDefault();
    if(this.handleValidation()){
      this.props.nextStep();
    }
  }
  handleChange(field, e){         
        let fields = this.state.fields;
        fields[field] = e.target.value;        
        this.setState({fields});
      }
back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
      render(){
          return <div><Imageb/>                    
          <Row className="top justify-content-center">
              <Col md="6" xs="12" sm="6"> 
                <Card className="top"> 
                  <CardBody>
                  <Row>                              
                        <Col className="text-center" md='12'>
                        <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                        </Col>
                        <Col className="large-text text-center">
                      <h5 className="text-info">ASSETS</h5>
                      </Col>                        
                  </Row>
                  <Form>
                    <Row>
                            <Col md="6" xs="12" sm="6">
                                <FormGroup>
                                <span className="error">{this.state.errors===undefined ?null: this.state.errors["assets"]}</span> 
                                <Label className="sr-only" htmlFor="selectSm">ASSETS</Label>
                                <Input type="select" name="assets" onChange={this.handleChange.bind(this, "assets")} id="assets" bsSize="sm">
                                  <option value="">Assets</option>
                                  <option value="1">0-99,999</option>
                                  <option value="2">100,000-250,000</option>
                                  <option value="3">250,001-500,000</option>
                                  <option value="4">500,001-1,000,000</option>
                                  </Input>
                                 </FormGroup>
                                </Col>
                                <Col md="6" xs="12" sm="6">
                                <FormGroup>
                                <span className="error">{this.state.errors===undefined ?null: this.state.errors["age"]}</span> 
                               <Label className="sr-only" htmlFor="selectSm">Age</Label>
                              <Input type="select" name="age" id="age" onChange={this.handleChange.bind(this, "age")} bsSize="sm">
                                <option value="">Age</option>
                                <option value="1">21-35</option>
                                <option value="2">36-45</option>
                                <option value="3">46-55</option>
                                <option value="4">56-75</option>
                                <option value="5">75+</option>
                              </Input>
                          </FormGroup>
                            </Col>
                        </Row>               
                        
                        <Row>
                            <Col md="6" xs="12" sm="6">
                                <FormGroup>
                                <Label className="sr-only" htmlFor="selectSm">Life Happiness</Label>
                        <Input type="select" name="life_happiness" id="Select" bsSize="sm">
                          <option value="">Life Happiness</option>
                          <option value="1">Over the moon</option>
                          <option value="2">Very Happy</option>
                          <option value="3">UnHappy</option>
                          <option value="4">Depressed</option>
                        </Input>
                       </FormGroup>
                                </Col>
                                <Col md="6" xs="12" sm="6">
                                <FormGroup>
                             <Label className="sr-only" htmlFor="selectSm">Financial Awareness</Label>
                        <Input type="select" name="select" id="Select" bsSize="sm">
                          <option value="0">Financial Awareness</option>
                          <option value="1">Financially Confident</option>
                          <option value="2">Financially Aware</option>
                          <option value="3">Financially Chanllenged</option>
                        </Input>
                      </FormGroup>
                            </Col>
                        </Row>               
                        <Row>
                            <Col md="6" xs="12" sm="6">
                                <FormGroup>
                            <span className="error">{this.state.errors===undefined ?null: this.state.errors["retirement_goal"]}</span> 
                            <Label className="sr-only" htmlFor="selectSm">Retirement Goal</Label>
                        <Input type="select" name="retirement_goal" onChange={this.handleChange.bind(this, "retirement_goal")} id="Select" bsSize="sm">
                          <option value="">Retirement Goal</option>
                          <option value="1">0-5</option>
                          <option value="2">6-10</option>
                          <option value="3">11-15</option>
                        </Input>
                       </FormGroup>
                                </Col>
                                <Col md="6" xs="12" sm="6">
                                <FormGroup>
                            <Label className="sr-only" htmlFor="selectSm">Money Meaning</Label>
                        <Input type="select" name="select" id="Select" bsSize="sm">
                          <option value="">Money Meaning</option>
                          <option value="1">Freedom</option>
                          <option value="2">Control</option>
                          <option value="3">Security</option>
                          <option value="4">All the above</option>
                        </Input>
                      
                      </FormGroup>
                            </Col>
                        </Row>               
                        <Row>
                            <Col md="6" xs="12" sm="6">
                                <FormGroup>
                         <Label className="sr-only" htmlFor="selectSm">Financial Desision Maker</Label>
                        <Input type="select" name="select" id="Select" bsSize="sm">
                          <option value="0">Financial Desision Maker</option>
                          <option value="1">Me</option>
                          <option value="2">Partner</option>
                          <option value="3">Both</option>
                          <option value="4">Outside Source</option>
                        </Input>
                      
                       </FormGroup>
                                </Col>
                        </Row>
                  </Form>
                  <Button type="submit" size="md" className="float-right" onClick={this.continue} color="info"> Next</Button>
                  <Button type="reset" size="md" onClick={this.back}> PREVIOUS</Button>
                    </CardBody> 
                    </Card> 
                    
          </Col>
          </Row>
          </div>
      
      }
  }
  export default AdvisorAssets;