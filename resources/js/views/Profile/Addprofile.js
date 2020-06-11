import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Addprofile.css'
import {
  Button,
  CardBody,
  Col,
  FormGroup,
  Input,
  Label,
  Row,
  Card,
  Form
} from 'reactstrap';

class Addprofile extends Component{
  constructor(props){
    super(props);
    this.state = {
      image :false,
      fields : {},
      error : {}

    }
    this.image=this.image.bind(this);
  }
  handleValidation(){
    let fields = this.state.fields;
    let errors = {};
    let formIsValid = true;

    if(!fields["email"]){
       formIsValid = false;
       errors["email"] = "Cannot be empty";
    }
    if(!fields["firstname"]){
      formIsValid = false;
      errors["firstname"] = "Cannot be empty";
   }
   if(!fields["lastname"]){
    formIsValid = false;
    errors["lastname"] = "Cannot be empty";
 }
 if(!fields["company"]){
  formIsValid = false;
  errors["company"] = "Cannot be empty";
}
if(!fields["phone"]){
  formIsValid = false;
  errors["phone"] = "phone Number Cannot be empty";
}
if(!fields["city"]){
  formIsValid = false;
  errors["city"] = "City Cannot be empty";
}
if(!fields["postcode"]){
  formIsValid = false;
  errors["postcode"] = "postcode Cannot be empty";
}
if(!fields["country"]){
  formIsValid = false;
  errors["country"] = "country Cannot be empty";
}
    if(typeof fields["email"] !== "undefined"){
       let lastAtPos = fields["email"].lastIndexOf('@');
       let lastDotPos = fields["email"].lastIndexOf('.');

       if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && (fields["email"].length - lastDotPos) > 2)) {
          formIsValid = false;
          errors["email"] = "Email is not valid";
        }
   } 

   if(typeof fields['phone']!=="undefined"){
    let numl = fields["phone"];
    if(!(numl.length<=10 && numl.length>=10)){
      formIsValid=false;
      errors["phone"]="number is not valid";
    }
   }

   this.setState({errors: errors});
   return formIsValid;
}
  contactSubmit(e){
    e.preventDefault();

    if(this.handleValidation()){
      window.location.href = "https://nrji.ca/averti/";
    }else{      
    }
}
handleChange(field, e){         
  let fields = this.state.fields;
  fields[field] = e.target.value;        
  this.setState({fields});
}
  image(){
    this.setState({
      image: !this.state.image,
    });
  }
    render(){
        return<div>
        <img className='set' src={'assets/images/com.jpg'} />
        <Row className="top justify-content-center">
        <Col md="6" xs="12" sm="12">      
        <Card className="top"> 
        <CardBody>        
              <Row>
                <Col className="text-center" md='12'>
                <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                </Col>
                <Col md='12' xs="12" sm="12">
                 <h5 className="text-info">REGISTRATION</h5>

                </Col>
              </Row>
              <Form id="myform">
              <FormGroup row className="my-0">
                  <Col md='6' xs="12" sm="12">
                <FormGroup >
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["firstname"]}</span>
                  <Label className="sr-only" htmlFor="name">First Name</Label>
                  <Input type="text" onChange={this.handleChange.bind(this, "firstname")} value={this.state.fields["firstname"]} id="firstname" name="firstname" placeholder="first Name" />
                </FormGroup>
                </Col>
                <Col>
                <FormGroup>
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["lastname"]}</span>
                  <Label className="sr-only" htmlFor="lastname">Last Name</Label>
                  <Input type="text" onChange={this.handleChange.bind(this, "lastname")} value={this.state.fields["lastname"]} id="lastname"  name="lastname" placeholder="Last Name" />
                </FormGroup>
                </Col>
                </FormGroup>
                <FormGroup>
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["company"]}</span>
                  <Label className="sr-only" htmlFor="company">Company Name</Label>
                  <Input type="text" onChange={this.handleChange.bind(this, "company")} value={this.state.fields["company"]} id="company"  name="company" placeholder="Company" />
                </FormGroup>
                 
                <FormGroup>
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["email"]}</span>
                  <Label className="sr-only" htmlFor="email">Email</Label>
                  <Input type="email" onChange={this.handleChange.bind(this, "email")} value={this.state.fields["email"]} id="email" placeholder="Email" />
                </FormGroup>
              
                <FormGroup>
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["phone"]}</span>              
                  <Label className="sr-only" htmlFor="phone_no">Phone Number</Label>
                  <Input type="number" onChange={this.handleChange.bind(this, "phone")} value={this.state.fields["phone"]} id="phone_no" name="phone_no" placeholder="Phone Number" />
                </FormGroup>  
                <FormGroup row className="my-0">
                  <Col md='6' xs="12" sm="12">
                    <FormGroup>
                      <span className="error">{this.state.errors===undefined ?null: this.state.errors["city"]}</span>
                      <Label className="sr-only" htmlFor="city">City</Label>
                      <Input type="text" onChange={this.handleChange.bind(this, "city")} value={this.state.fields["city"]} id="city" placeholder="Enter your city" />
                    </FormGroup>
                  </Col>
                  <Col>
                    <FormGroup>
                      <span className="error">{this.state.errors===undefined ?null: this.state.errors["postcode"]}</span>             
                      <Label className="sr-only" htmlFor="postal-code">Postal Code</Label>
                      <Input type="text" onChange={this.handleChange.bind(this, "postcode")} value={this.state.fields["postcode"]} id="postal-code" placeholder="Postal Code" />
                    </FormGroup>
                  </Col>
                </FormGroup>
                <FormGroup>
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["country"]}</span>       
                  <Label className="sr-only" htmlFor="country">Country</Label>
                  <Input type="text" onChange={this.handleChange.bind(this, "country")} value={this.state.fields["country"]} id="country" placeholder="Country name" />
                </FormGroup>
                <Button type="submit" color="info" onClick={this.contactSubmit.bind(this)} name="Submit" block>Sign up</Button>
                </Form>
              </CardBody>
              </Card> 
          </Col>
          </Row>
         </div>
    }
}
export default Addprofile;