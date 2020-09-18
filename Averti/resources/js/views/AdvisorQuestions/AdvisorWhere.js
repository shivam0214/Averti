import React, { Component } from 'react';
import Checkbox from '@material-ui/core/Checkbox';
import Radio from '@material-ui/core/Radio';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import Imageb from '../Advisor/Imageb/Imageb';
import '../Advisor/Advisor.css'

import {
    Button,
    Card,
    CardBody,
    Col,
    FormGroup,Input,Label,

    
    Row,
  } from 'reactstrap';

  class AdvisorWhere extends Component{
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
          if(!fields["status"]){
          formIsValid= false;
          errors["status"] = " Select Status";
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
    back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
    handleChange(field, e){         
        let fields = this.state.fields;
        fields[field] = e.target.value;        
        this.setState({fields});
      }

      render(){
          return<div><Imageb/>
          <Row className="top justify-content-center">
          <Col md="6" xs="12" sm="12">      
          <Card className="top "> 
          <CardBody>        
                <Row>
                  <Col className="text-center" md='12'>
                  <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
                  </Col>
                  <Col md='12' xs="12" sm="12">
                   <h5 className="text-info text-center">WHERE</h5> 
                  </Col>
                </Row>
                <Row>
                <FormGroup>
                <p className="form-control-label text-center text-info" >What services are you most interested in receiving help with?</p>                                     
                <Row>
                    <Col xs="12" sm="4" md="6" >
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                      className="labelcheck"  label="Estate Planning"
                        labelPlacement="end"/>
                    </Col>
                    <Col xs="12" sm="4" md="6" >               
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                       className="labelcheck"  label="Life And Money Management"
                        labelPlacement="end"/>
                    </Col>
                    </Row>
                    <Row>
                    <Col xs="12" sm="4" md="6" >
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                      className="labelcheck"  label="Cash Flow / Budgeting"
                        labelPlacement="end"/>
                    </Col>
                    <Col xs="12" sm="4" md="6" >
                    <FormControlLabel value="end" control={<Checkbox color="primary" />}
                      className="labelcheck"  label="All Of The Above"
                        labelPlacement="end"/>
                    </Col>
                </Row>
                  </FormGroup>              
                </Row>
                <Col md="6" className="text-center ">
                <Label className="form-control-label text-info" >Where are you now? Status</Label>                                     
                </Col>
               <span className="error">{this.state.errors===undefined ?null: this.state.errors["status"]}</span> 
                <FormGroup>              
                    <Row >
                      <Col xs="12" sm="4" md="6" >
                      <FormControlLabel value="end" control={<Radio name="options" onChange={this.handleChange.bind(this, "status")} color="primary" />}
                        className="labelcheck" label="Single"
                        labelPlacement="end"/>
                      </Col>
                      <Col xs="12" sm="4" md="6" >
                      <FormControlLabel value="end" control={<Radio name="options" onChange={this.handleChange.bind(this, "status")} color="primary" />}
                        className="labelcheck" label="Married"
                        labelPlacement="end"/>
                      </Col>
                      </Row>
                      <Row>
                      <Col xs="12" sm="4" md="6" >
                      <FormControlLabel value="end" control={<Radio name="options" onChange={this.handleChange.bind(this, "status")} color="primary" />}
                        className="labelcheck"  label="widowd"
                        labelPlacement="end"/>
                      </Col>
                      <Col xs="12" sm="4" md="6" >
                      <FormControlLabel value="end" control={<Radio name="options" onChange={this.handleChange.bind(this, "status")} color="primary" />}
                        className="labelcheck"  label="Divorce"
                        labelPlacement="end"/>
                      </Col>
                    </Row>
                  </FormGroup>
            
                  <Button type="submit" size="md" className="float-right" onClick={this.continue} color="info"> Next</Button>
                  <Button type="reset" size="md" onClick={this.back}> PREVIOUS</Button>
                  </CardBody>  
                  </Card>
          </Col>
          </Row>
          </div>
      
      }
  }
  export default AdvisorWhere;