<x-main>

                            <div class="card mb-grid">
                                <div class="card-header">
                                    <div class="card-header-title">Input sizes</div>
                                </div>


                            </div>

                            <div class="card mb-grid">
                                <div class="card-header">
                                    <div class="card-header-title">Column sizing</div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-7">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card mb-grid">
                                <div class="card-header">
                                    <div class="card-header-title">Validation</div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        The example below uses a flexbox utility to vertically center the contents and changes <code class="highlighter-rouge">.col</code> to <code class="highlighter-rouge">.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.
                                    </p>
                                    <form id="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="validationCustom03">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label" for="validationCustom04">State</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label" for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mr-2" type="submit">Submit form</button>
                                        <small class="text-muted">
                                            Click submit to test validation feature
                                        </small>
                                    </form>
                                </div>
                            </div>

                            <div class="card mb-grid">
                                <div class="card-header">
                                    File upload
                                </div>
                                <div class="card-body">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>
            </div>

        </div>
</x-main>


