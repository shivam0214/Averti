import React, { Component } from 'react';
import { Badge, Card, CardBody, CardHeader, Col, Pagination, PaginationItem, PaginationLink, Row, Form,Label,
  FormGroup, InputGroup,
  InputGroupAddon,
  InputGroupButtonDropdown,
  InputGroupText,  Input, Table } from 'reactstrap';

class Contact extends Component {
  render() {
    return (
      
      <div className="animated fadeIn">
        <Row>
          
          <Col xs="12" lg="12">
            <Card>
              <CardHeader>
                <i className="fa fa-align-justify"></i>Mapping
              </CardHeader>
              <CardBody>
              <Form action="" method="post" encType="multipart/form-data" className="form-horizontal">
              <FormGroup row>
                    <Col md="1">
                      <Label htmlFor="select">Title</Label>
                    </Col>
                    <Col md="2">
                      <Input type="select" name="select" id="select">
                        <option value="0">Choose One</option>
                      
                      </Input>
                    </Col>
                    <Col md="1">
                      <Label htmlFor="select">First Name</Label>
                    </Col>
                    <Col md="2">
                      <Input type="select" name="select" id="select">
                        <option value="0">Choose One</option>
                      
                      </Input>
                    </Col>
                  </FormGroup>
                  </Form>
                <Table responsive>
                  <thead>
                 
                  </thead>
                  <tbody>
                  <tr>
                    <td>Title</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                 
                    </td>
                    <td>First Name</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                    </td>
                    <td>Account No</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                      
                    </td>
                    <td>Open Date</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                  <td>Last Name</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                      
                    </td>
                    <td>Address</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                    </td>
                    <td>Change Off Date</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                      
                    </td>
                    <td>Current Balance</td>
                    <td>
                    <select type="select" name="select" id="select">
                     <option value="Choose one">Choose one</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Chetan Mohamed</td>
                    <td>2012/02/01</td>
                    <td>Admin</td>
                    <td>
                      <Badge color="secondary">Inactive</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Derick Maximinus</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td>
                      <Badge color="warning">Pending</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Friderik Dávid</td>
                    <td>2012/01/21</td>
                    <td>Staff</td>
                    <td>
                      <Badge color="success">Active</Badge>
                    </td>
                  </tr>
                 
                  <tr>
                    <td>Samppa Nori</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td>
                      <Badge color="success">Active</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Estavan Lykos</td>
                    <td>2012/02/01</td>
                    <td>Staff</td>
                    <td>
                      <Badge color="danger">Banned</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Chetan Mohamed</td>
                    <td>2012/02/01</td>
                    <td>Admin</td>
                    <td>
                      <Badge color="secondary">Inactive</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Derick Maximinus</td>
                    <td>2012/03/01</td>
                    <td>Member</td>
                    <td>
                      <Badge color="warning">Pending</Badge>
                    </td>
                  </tr>
                  <tr>
                    <td>Friderik Dávid</td>
                    <td>2012/01/21</td>
                    <td>Staff</td>
                    <td>
                      <Badge color="success">Active</Badge>
                    </td>
                  </tr>
                  </tbody>
                </Table>
               
              </CardBody>
            </Card>
          </Col>
          </Row>
           </div>

    );
  }
}

export default Contact;