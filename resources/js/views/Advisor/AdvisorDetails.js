import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';

import Imageb from './Imageb/Imageb';
import {
    Button,
    Card,
    CardBody,
    Col,
    Input,
    Form,
    FormGroup,
    Label,
    Row,
  } from 'reactstrap';
     
  class AdvisorDetails extends Component{ 
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
      if(!fields["firstname"]){
      formIsValid= false;
      errors["firstname"] = "Cannot be empty";
      } 
      if(!fields["lastname"]){
      formIsValid= false;
      errors["lastname"] = "Cannot be empty";
        }
       if(!fields["company"]){
          formIsValid= false;
          errors["company"] = "Cannot be empty";
       }
       if(!fields["phone_no"]){
      formIsValid= false;
      errors["phone_no"] = "Cannot be empty";
      }
      if(!fields["address"]){
      formIsValid= false;
      errors["address"] = "Cannot be empty";
      }
      if(!fields["city"]){
      formIsValid= false;
      errors["city"] = "Cannot be empty";
      }
      if(!fields["state"]){
      formIsValid= false;
      errors["state"] = "Cannot be empty";
      }
      if(!fields["postal_code"]){
      formIsValid= false;
      errors["postal_code"] = "Cannot be empty";
      }
      if(!fields["country"]){
      formIsValid= false;
      errors["country"] = "Cannot be empty";
      }
      if(!fields["email"]){
       formIsValid = false;
       errors["email"] = "Cannot be empty";
      }
     if(typeof fields["email"] !== "undefined"){
       let lastAtPos = fields["email"].lastIndexOf('@');
       let lastDotPos = fields["email"].lastIndexOf('.');

       if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && (fields["email"].length - lastDotPos) > 2)) {
          formIsValid = false;
          errors["email"] = "Email is not valid";
        }
   }
   if(typeof fields['phone_no']!=="undefined"){
    let numl = fields["phone_no"];
    if(!(numl.length<=10 && numl.length>=10)){
      formIsValid=false;
      errors["phone_no"]="number is not valid";
    }
   }
   
    this.setState({errors: errors});
      return formIsValid;
  }
  
      continue = e =>{
      e. preventDefault();
      if(this.handleValidation()){
      this.props.nextStep();
        }
        else{
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
          return <div> 
            <Imageb/>                     
            <Row className="top justify-content-center ">
                <Col md="6" xs="12" sm="6"> 
              <Card className="top"> 
                <CardBody>
                <Row> 
                      <Col className="text-center" md='12'>
                        <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                        </Col>
                        <Col className="large-text text-center">
                        <h5 className="text-info">DETAILS</h5>
                        </Col>                        
                      </Row>
                      <Form id="myform">
                        <Row>
                            <Col md="6" xs="12" sm="6">
                                <FormGroup>
                                <span className="error">{this.state.errors===undefined ?null: this.state.errors["firstname"]}</span>
                                <Label className="sr-only" htmlFor="name">First Name</Label>
                                <Input type="text" id="firstname" name="firstname" onChange={this.handleChange.bind(this, "firstname")} value={this.state.fields["firstname"]} placeholder="First Name" />
                                </FormGroup>
                                </Col>
                                <Col md="6" xs="12" sm="6">
                                <FormGroup>
                              <span className="error">{this.state.errors===undefined ?null: this.state.errors["lastname"]}</span>
                                <Label className="sr-only" htmlFor="lastname">Last Name</Label>
                                <Input type="text" id="lastname" onChange={this.handleChange.bind(this, "lastname")} value={this.state.fields["lastname"]} name="lastname" placeholder="Last Name" />
                                </FormGroup>
                            </Col>
                        </Row>               
                            <FormGroup>
                            <span className="error">{this.state.errors===undefined ?null: this.state.errors["email"]}</span>
                            <Label className="sr-only" htmlFor="email" >Email</Label>
                            <Input type="email" onChange={this.handleChange.bind(this, "email")} value={this.state.fields["email"]} id="email" name="email"   placeholder="Email" />
                            </FormGroup>
                        <FormGroup row className="my-0"> 
                        <Col md="6" xs="12" sm="6">       
                        <FormGroup>
                            <span className="error">{this.state.errors===undefined ?null: this.state.errors["company"]}</span>                        
                        <Label className="sr-only" htmlFor="company">Company Name</Label>
                        <Input type="company"onChange={this.handleChange.bind(this, "company")} value={this.state.fields["company"]} id="company" name="company" placeholder="Company Name" />
                        </FormGroup>
                        </Col>
                        <Col md="6" xs="12" sm="6">
                        <FormGroup>
                        <span className="error">{this.state.errors===undefined ?null: this.state.errors["phone_no"]}</span>                        
                        <Label className="sr-only" htmlFor="phone_no">Phone Number</Label>
                        <Input type="number" id="phone_no" onChange={this.handleChange.bind(this, "phone_no")} value={this.state.fields["phone_no"]} name="phone_no" placeholder="Phone Number" />
                        </FormGroup>
                        </Col>
                        </FormGroup>
                        <FormGroup row className="my-0">
                        <Col md="6" xs="12" sm="6">
                        <span className="error">{this.state.errors===undefined ?null: this.state.errors["address"]}</span>                        
                        <FormGroup>
                        <Label className="sr-only" htmlFor="address">Street Address</Label>
                        <Input type="text" onChange={this.handleChange.bind(this, "address")} value={this.state.fields["address"]} id="address" name="address" placeholder="Street Address" />
                        </FormGroup> 
                        </Col>
                        <Col md="6" xs="12" sm="6">
                        <span className="error">{this.state.errors===undefined ?null: this.state.errors["city"]}</span>                        
                        <FormGroup>
                        <Label className="sr-only" htmlFor="city">City</Label>
                        <Input type="text" id="city" onChange={this.handleChange.bind(this, "city")} value={this.state.fields["city"]} name="city" placeholder="City" />
                        </FormGroup>
                        </Col> 
                        </FormGroup>           
                        <FormGroup row className="my-0">
                        <Col md="6" xs="12" sm="6">
                            <FormGroup>
                            <span className="error">{this.state.errors===undefined ?null: this.state.errors["state"]}</span>                        
                            <Label className="sr-only" htmlFor="state">State</Label>
                            <Input type="text" id="state"  name="state" onChange={this.handleChange.bind(this, "state")} value={this.state.fields["state"]} placeholder="State" />
                            </FormGroup>
                        </Col>
                        <Col md="6" xs="12" sm="6">
                            <FormGroup>
                            <span className="error">{this.state.errors===undefined ?null: this.state.errors["postal_code"]}</span>                        
                            <Label className="sr-only" htmlFor="postal-code">Postal Code</Label>
                            <Input type="text" id="postal_code" name="postal_code" onChange={this.handleChange.bind(this, "postal_code")} value={this.state.fields["postal_code"]} placeholder="Postal Code" />
                            </FormGroup>
                        </Col>
                        </FormGroup>
                        <FormGroup>
                        <span className="error">{this.state.errors===undefined ?null: this.state.errors["country"]}</span>                        
                        <Label className="sr-only" htmlFor="country">Country</Label>
                        <Input type="text" id="country" name="country" onChange={this.handleChange.bind(this, "country")} value={this.state.fields["country"]} placeholder="Country name" />
                        </FormGroup>             
                        </Form>
                      <Button type="submit" size="md"  className="float-right" onClick={this.continue.bind(this)} color="info"> Next   </Button>
                      </CardBody>  
              </Card>
                </Col>
          </Row>
          </div>
         
      }
  }
  export default AdvisorDetails;