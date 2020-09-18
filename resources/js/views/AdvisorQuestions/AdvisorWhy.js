import React, { Component } from 'react';
import Imageb from '../Advisor/Imageb/Imageb';

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

  class AdvisorWhy extends Component{
      
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
          if(!fields["planning"]){
          formIsValid= false;
          errors["planning"] = " Select Option";
          }
          if(!fields["services"]){
          formIsValid= false;
          errors["services"] = " Select Option";
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
          return  <div><Imageb/>
          <Row className="top justify-content-center">
          <Col md="6" xs="12" sm="12">      
          <Card className="top"> 
          <CardBody>        
                <Row>
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col md='12' xs="12" sm="12">
                   <h5 className="text-info text-center">WHY</h5> 
                  </Col>
                </Row>
                <Row>
                <FormGroup>
                  <p className="text-center text-info">What type of planning do you want to get started ?</p>
                  <Col xs="12" md="12">
                    <span className="error">{this.state.errors===undefined ?null: this.state.errors["planning"]}</span> 
                    <Label className="sr-only text-info" htmlFor="selectSm">Planning</Label>
                      <Input type="select" name="planning" onChange={this.handleChange.bind(this, "planning")}id="Select" bsSize="sm">
                        <option value="0">Select Option</option>
                        <option value="1">Financial Planning</option>
                        <option value="2">Life Management</option>
                        <option value="3">Income Planning</option>
                        <option value="4">Investments</option>
                      </Input>
                    </Col>
                </FormGroup>
                <FormGroup>
                  <p className="text-center text-info">How much do you have allocated for these services?</p>
                  <Col xs="12" md="12">
                    <span className="error">{this.state.errors===undefined ?null: this.state.errors["services"]}</span> 
                    <Label className="sr-only text-info"  htmlFor="selectSm">Planning</Label>
                      <Input type="select" name="services" onChange={this.handleChange.bind(this, "services")} id="Select" bsSize="sm">
                        <option value="0">Select Option</option>
                        <option value="1">2500-5000</option>
                        <option value="2">5001-7000</option>
                        <option value="3">7001-10000</option>
                        <option value="4">10000+</option>
                      </Input>
                    </Col>
                </FormGroup>

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
  export default AdvisorWhy;