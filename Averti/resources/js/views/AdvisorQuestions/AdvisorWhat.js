import React, { Component } from 'react';
import Imageb from '../Advisor/Imageb/Imageb';
import Checkbox from '@material-ui/core/Checkbox';
import FormControlLabel from '@material-ui/core/FormControlLabel';
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

  class AdvisorWhat extends Component{
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
          if(!fields["checkbox"]){
          formIsValid= false;
          errors["checkbox"] = " Select yes or Not";
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
          return<div><Imageb/>
          <Row className="top justify-content-center">
          <Col md="6" xs="12" sm="12">      
          <Card className="top"> 
          <CardBody>        
                <Row>
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col md='12' xs="12" sm="12">
                   <h5 className="text-info text-center">WHAT</h5> 
                  </Col>
                </Row>
                <Row> 
                  <span className="error">{this.state.errors===undefined ?null: this.state.errors["checkbox"]}</span> 
                  <p className="text-center text-info" >Are you looking for holistic approach to life and money management?</p>
                </Row>
                <Row>
                <Col  xs="12" sm="4" md="6" >
                <FormControlLabel value="end" control={<Checkbox name="checkbox" onChange={this.handleChange.bind(this, "checkbox")}  color="primary" value="0" />}
                      className="labelcheck"  label="Yes"
                        labelPlacement="end"/>
                 
                </Col>
                <Col xs="12" sm="4" md="6" >
                <FormControlLabel value="end" control={<Checkbox name="checkbox" onChange={this.handleChange.bind(this, "checkbox")}  color="primary"  value="1" />}
                      className="labelcheck"  label="No"
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
  export default AdvisorWhat;