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
      fields : {},
      error : {}
    }
  }
  handleValidation(){
    let fields = this.state.fields;
    let errors = {};
    let formIsValid = true;
      if(!fields["username"]){
      formIsValid= false;
      errors["username"] = "Insert UserName";
      }
      if(!fields["password"]){
      formIsValid= false;
      errors["password"] = "Enter password";
      } 
      
      if((fields["password"])!==(fields["password_confirm"])){
      formIsValid= false;
      errors["password_confirm"]  = " Password not match";
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
        const { values} = this.props; 
        return<div> <Imageb/>
            <Row className="top justify-content-center ">
                <Col md="6" xs="12" sm="6"> 
              <Card className="top"> 
                <CardBody>
                  <Row>        
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>  
                  <Col className="large-text text-center">
                        <h5 className="text-info">ADVISOR USERNAME</h5>
                        </Col>
                </Row>
                    <Row>
                            <Col xs="12">
                              <FormGroup>
                              <span className="error">{this.state.errors===undefined ?null: this.state.errors["username"]}</span>
                              <Label className="sr-only" htmlFor="username" >UserName</Label>
                              <Input type="text" id="username" name="username" onChange={this.handleChange.bind(this, "username")} placeholder="User Name" />
                              </FormGroup>
                              <FormGroup>
                              <span className="error">{this.state.errors===undefined ?null: this.state.errors["password"]}</span>
                              <Label className="sr-only" htmlFor="Password">Password</Label>
                              <Input type="password" id="password"  name="password" onChange={this.handleChange.bind(this, "password")} placeholder="Password" />
                              </FormGroup>
                              <FormGroup>
                              <span className="error">{this.state.errors===undefined ?null: this.state.errors["password_confirm"]}</span>                              
                              <Label className="sr-only" htmlFor="Password">Password Confirmation</Label>
                              <Input type="password" id="password_confirm"  name="password_confirm" onChange={this.handleChange.bind(this, "password_confirm")} placeholder="Password Confirmation" />
                              </FormGroup>
                            
                            </Col>                    
                      </Row>                               
                      <Button type="submit" size="md" color="info" className="float-right" onClick={this.continue}> Next</Button>
                  <Button type="reset" size="md"  onClick={this.back}> Privous</Button>
                  
         </CardBody> 
          </Card>
        </Col>
        </Row>
        </div>        
    
    }
}
export default AdvisorUsername;