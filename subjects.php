<?php
            include('subjects.php');
            ?>
            <table>
                <tr>
                    <th width="400">Subject</th>
                    <th width="60">Grade</th>
                </tr>
                <tr>
                    <td>
            <select name="o1" class="form-control">
                <option value="">---- Select Subject----</option>
                <?php
                include('connect.php');
                $sql3="SELECT * FROM olevel";
                $result3=mysql_query($result3);

                while($rows=mysql_fetch_assoc($result3)){
                ?>
                <option value="<?php echo $rows['subject'];  ?>"><?php echo $rows['subject'];  ?></option>
                <?php
                }
                ?>
            </select>
                    </td>
                    <td>
            <select name="g1" class="form-control">
                <option value="">---- Select Grade----</option>
                <?php
                $sql4="SELECT * FROM grade";
                $result4=mysql_query($result4);

                while($rows=mysql_fetch_assoc($result4)){
                ?>
                <option value="<?php echo $rows['subject'];  ?>"><?php echo $rows['subject'];  ?></option>
                <?php
                }
                ?>
            </select></td>
                </tr>
            </table>
            

            <select name="course">
                                                            <option selected="course">HNDLT</option>
                                                            <option selected="course">HNDSLT</option>
                                                            <option selected="course">HNDCHEM</option>
                                                            <option selected="course">BIOCHEM</option>
                                                            <option selected="course">CHEM OPTION</option>
                                                            <option selected="course">MICROBIOLOGY OPTION</option>
                                                            <option selected="course">HNDPLT</option>
                                                            <option selected="course">HNDSC</option>
                                                            <option selected="course">NDLT</option>
                                                            <option selected="course">NDSLT</option>
                                                            <option selected="course">NDPLT</option>
                                                            <option selected="course">NDCS</option>
                                                            <option selected="course">DPM</option>
                                                            <option selected="course">DFT</option>
                                                            <option selected="course">DICPT</option>
                                                            <option selected="course">DLPT</option>
                                                            <option selected="course">DFM</option>
                                                            <option selected="course">DPM</option>
                                                            <option selected="course">DFT</option>
                                                            <option selected="course">DICPT</option>
                                                            <option selected="course">DLPT</option>
                                                            <option selected="course">DFM</option>
                                                            <option selected="course">ACH &amp; SI</option>
                                                            <option selected="course">ACFM</option>
                                                            <option selected="course">ACLM</option>
                                                            <option selected="course">CLM</option>
                                                            <option selected="course">CFM</option>
                                                            <option selected="course">CH &amp; SI</option>
                                                            <option selected="course">CCS</option>
                                                            <option selected="course">CPPT</option>
                                                            <option selected="course">CSLT</option>
                                                            
                                                        </select>